const Discord = require('discord.js');
const logging = require('./logging.js');
const client = new Discord.Client();

logging.log("Started bot.js");

client.on('ready', () => {
	logging.log(`Logged in as ${client.user.tag}!`);
});



// client.login('token');