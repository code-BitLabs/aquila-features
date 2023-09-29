const { defineConfig } = require("cypress");

module.exports = defineConfig({
  env: {
		wpUser: 'admin',
		wpPassword: 'admin',
	},
  e2e: {
    baseUrl: 'http://localhost/wordpress',
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },
});
