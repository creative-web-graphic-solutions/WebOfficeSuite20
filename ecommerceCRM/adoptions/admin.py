from django.contrib import admin

from .models import Amazoninv
from .models import Invoicetracker
from .models import Payment


@admin.register(Amazoninv)
class Amazonadmin(admin.ModelAdmin):
	pass

@admin.register(Invoicetracker)	
class Invoiceadmin(admin.ModelAdmin):
	pass

@admin.register(Payment)	
class Paymentsadmin(admin.ModelAdmin):		
      pass

