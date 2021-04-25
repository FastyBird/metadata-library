import { writeFileSync } from 'fs'
import pkg from 'json-schema-to-typescript'

const { compileFromFile } = pkg

async function generate() {
	writeFileSync('./types/accounts-module.entity.account.d.ts', await compileFromFile('./resources/schemas/accounts-module/entity.account.json'))
	writeFileSync('./types/accounts-module.entity.email.d.ts', await compileFromFile('./resources/schemas/accounts-module/entity.email.json'))
	writeFileSync('./types/accounts-module.entity.identity.d.ts', await compileFromFile('./resources/schemas/accounts-module/entity.identity.json'))

	writeFileSync('./types/devices-module.entity.device.d.ts', await compileFromFile('./resources/schemas/devices-module/entity.device.json'))
	writeFileSync('./types/devices-module.entity.device.property.d.ts', await compileFromFile('./resources/schemas/devices-module/entity.device.property.json'))
	writeFileSync('./types/devices-module.entity.device.configuration.d.ts', await compileFromFile('./resources/schemas/devices-module/entity.device.configuration.json'))
	writeFileSync('./types/devices-module.entity.channel.d.ts', await compileFromFile('./resources/schemas/devices-module/entity.channel.json'))
	writeFileSync('./types/devices-module-entity.channel.property.d.ts', await compileFromFile('./resources/schemas/devices-module/entity.channel.property.json'))
	writeFileSync('./types/devices-module.entity.channel.configuration.d.ts', await compileFromFile('./resources/schemas/devices-module/entity.channel.configuration.json'))

	writeFileSync('./types/triggers-module.entity.trigger.d.ts', await compileFromFile('./resources/schemas/triggers-module/entity.trigger.json'))
	writeFileSync('./types/triggers-module.entity.action.d.ts', await compileFromFile('./resources/schemas/triggers-module/entity.action.json'))
	writeFileSync('./types/triggers-module.entity.notification.d.ts', await compileFromFile('./resources/schemas/triggers-module/entity.notification.json'))
	writeFileSync('./types/triggers-module.entity.condition.d.ts', await compileFromFile('./resources/schemas/triggers-module/entity.condition.json'))

	writeFileSync('./types/data.device.control.d.ts', await compileFromFile('./resources/schemas/data/data.device.control.json'))
	writeFileSync('./types/data.device.property.d.ts', await compileFromFile('./resources/schemas/data/data.device.property.json'))
	writeFileSync('./types/data.channel.control.d.ts', await compileFromFile('./resources/schemas/data/data.channel.control.json'))
	writeFileSync('./types/data.channel.property.d.ts', await compileFromFile('./resources/schemas/data/data.channel.property.json'))
}

generate()
