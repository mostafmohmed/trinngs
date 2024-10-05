<?php

namespace Tests\Unit;

use App\Models\Task;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class taskstest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function a_user_can_create_a_blog_post()
    {
        // Arrange
        $user = factory(User::class)->create();
        $post = [
            'title' => 'My first blog post',
            'desc' => 'This is the body of my first blog post.',
            'status'=>1
        ];

        // Act
        $response = $this->actingAs($user)->post('/createtask', $post);

        // Assert
        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', $post);
    }
    public function test_user_can_delete_task()
    {
        // Arrange
        $post = factory(Task::class)->create();

        // Act
        $response = $this->delete("deletetask/{$post->id}");

        // Assert
        $response->assertStatus(204);
        $this->assertDatabaseMissing('Task', ['id' => $post->id]);
    }
    public function test_user_can_update_blog_post()
    {
        // Arrange
        $post = factory(Task::class)->create();
        $newData = [
            'title' => 'New title',
            'desc' => 'New body',
        ];

        // Act
        $response = $this->put("updatetask/{$post->id}", $newData);
        $this->withoutExceptionHandling();
        // Assert
        $response->assertStatus(200);
        $this->assertDatabaseHas('Task', array_merge(['id' => $post->id], $newData));
    }
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}
