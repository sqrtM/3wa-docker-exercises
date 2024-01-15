module.exports = class Message {
    constructor(
        lang = 'en',
        translations = {
            en: 'Hello World',
            fr: 'Bonjour le monde'
        }
    ) {
        this.lang = lang
        this.translations = translations
    }

    get() {
        return this.translations[this.lang]
    }

    setLang(lang) {
        this.lang = lang
    }
}
