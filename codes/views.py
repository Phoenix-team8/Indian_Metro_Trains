from django.shortcuts import render
from django.http import HttpResponse, Http404
from django.template import loader

def home(request):
    return HttpResponse('<h1>Welcome To Indian Metro trains<h1/>')
def login(request):
    return render(request, 'metro/login.html', {})
def register(request):
    return render(request, 'metro/reg.html', {})
def enquiry(request):
    return render(request, 'metro/enquiry.html', {})



