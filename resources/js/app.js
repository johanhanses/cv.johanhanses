require('./bootstrap')

import Alpine from 'alpinejs'
import * as Turbo from "@hotwired/turbo"

window.Alpine = Alpine
Turbo.start()
Alpine.start()
