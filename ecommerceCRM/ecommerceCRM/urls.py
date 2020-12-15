
from django.contrib import admin
# from django.urls import path
from django.conf.urls import url
# from model_report import report
# report.autodiscover()
from django.conf import settings
from django.conf.urls.static import static
from adoptions import views

urlpatterns = [

    url(r'^admin/', admin.site.urls),
    url(r'^$',views.home, name='home'),
    url(r'^productlist/',views.productmgt, name='product management'),
    url(r'^order/',views.invoicemgt, name='Order management'),
    url(r'^payment/',views.payment, name='Payment Information'),
    url(r'^Amazoninvsearch/',views.amazonsearch, name='Amazon Search'),
    url(r'^Index/',views.index, name='Index'),
    # url(r'^report/',include('model_report.urls'))
    # url(r'^totalbill/',views.totalbill, name='totalbill')
]

