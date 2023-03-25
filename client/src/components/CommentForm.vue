<template>
    <form class="bg-gray-900 p-8 rounded-lg" @submit.prevent="handleSubmit">
      <div class="mb-4">
        <label class="text-gray-400" for="email">Email:</label>
        <input class="bg-gray-800 text-gray-200 p-2 rounded-lg w-full" type="email" id="email" v-model="comment.email" required>
      </div>
      <div class="mb-4">
        <label class="text-gray-400" for="firstName">First Name:</label>
        <input class="bg-gray-800 text-gray-200 p-2 rounded-lg w-full" type="text" id="firstName" v-model="comment.firstName" required>
      </div>
      <div class="mb-4">
        <label class="text-gray-400" for="lastName">Last Name:</label>
        <input class="bg-gray-800 text-gray-200 p-2 rounded-lg w-full" type="text" id="lastName" v-model="comment.lastName" required>
      </div>
      <div class="mb-4">
        <label class="text-gray-400" for="birthDate">Birth Date:</label>
        <input class="bg-gray-800 text-gray-200 p-2 rounded-lg w-full" type="date" id="birthDate" v-model="comment.birthDate" required>
      </div>
      <div class="mb-4">
        <label class="text-gray-400" for="comment">Comment:</label>
        <textarea class="bg-gray-800 text-gray-200 p-2 rounded-lg w-full" id="comment" v-model="comment.comment" required></textarea>
      </div>
      <div class="mb-4">
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg" type="submit">Submit</button>
      </div>
      <div v-if="error" class="text-red-500 mb-4">
        {{ error }}
      </div>
      <div v-if="success" class="text-green-500 mb-4">
        Comment submitted successfully!
        <br>
        This form will be cleared in 3 seconds.
      </div>
    </form>
  </template>
  <script>
  import axios from 'axios'
  
  export default {
    data() {
      return {
        comment: {
          email: '',
          firstName: '',
          lastName: '',
          birthDate: '',
          comment: ''
        },
        error: null,
        success: false
      }
    },
    methods: {
      async handleSubmit() {
        try {
          const response = await axios.post('http://localhost:8000/api/comments', this.comment)
          this.success = true
          this.error = null
          setTimeout(() => {
            this.comment.email = ''
            this.comment.firstName = ''
            this.comment.lastName = ''
            this.comment.birthDate = ''
            this.comment.comment = ''
            this.success = false
          }, 3000)
        } catch (error) {
          this.error = 'Error submitting comment'
          this.success = false
        }
      }
    }
  }
  </script>