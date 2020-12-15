from django.shortcuts import render
from django.http import HttpResponse
from django.http import HttpRequest
from django.http import HttpResponseRedirect
from django.http import Http404


from .models import Amazoninv
from .models import Invoicetracker
from .models import Payment
from django.shortcuts import render

def index(request):
	amazonitem  = Amazoninv.objects.all()
	return render(request, 'index.html', {'amazonitem' : amazonitem})

amazoninv_id = None
# if requested.method == "GET":
    # amazoninv_id = request.GET['id']

if amazoninv_id:
    amazoninv = Amazoninv.objects.get(id=int(amazoninv_id))
    if amazoninv:
        # amazoninv.createdDate = True
        amazoninv.save()

def home(request):
	amazonitem = Amazoninv.objects.all()
	return render(request, 'home.html',{'amazonitem' : amazonitem})

def amazonsearch(request):
	invsearch = Amazoninv.objects.filter(Description = 'Latches')
	return render(request, 'Amazoninvsearch.html',{'invsearch' : invsearch})

def amazonitem():
	amazonitem = Amazoninv.objects.filter(SKU)
	return render(request, 'productmgt.html', {'amazonitem': amazonitem})


def productmgt(request):
	if request.method == 'POST':
		txt = request.POST.get('txt')
		print(txt)
	amazonitem = Amazoninv.objects.all()
	return render(request, 'productmgt.html',{'amazonitem' : amazonitem})

def invoicemgt(request):
	invoiceitem = Invoicetracker.objects.all()
	totalbill = Invoicetracker.totalbill()
	totalpaid = Invoicetracker.totalpaid()
	# test = MonthSqlite.test()
	return render(request, 'order.html',{'invoiceitem' : invoiceitem, 'totalpaid' :totalpaid, 'totalbill': totalbill, })


def payment(request):
	paymentinfo = Payment.objects.all().order_by('paymentdate')
	pymtdate = Payment.objects.all().order_by('-paymentdate')
	totalpayment = Payment.totalpayment()

	return render(request, 'payments.html',{'paymentinfo' : paymentinfo,'pymtdate': pymtdate, 'totalpayment':totalpayment})

def saveupdate(request,id):
  newval = Amazoninv.objects.get(id=id)
  if(newval):
    newval.update(SKU = itsku, Description = des)
    # return redirect('list_questions')
    return render(request, 'productmgt.html', {'newval': newval})

