# Generated by Django 4.2.7 on 2024-03-13 22:32

import datetime
import django.core.validators
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('domicilios', '0004_alter_city_city_and_more'),
    ]

    operations = [
        migrations.AlterField(
            model_name='company_transportation',
            name='date_domicile',
            field=models.DateField(validators=[django.core.validators.MinValueValidator(limit_value=datetime.date(2024, 3, 13))], verbose_name='Fecha Entrega'),
        ),
        migrations.AlterField(
            model_name='domicile',
            name='date',
            field=models.DateField(validators=[django.core.validators.MinValueValidator(limit_value=datetime.date(2024, 3, 13))], verbose_name='Fecha'),
        ),
    ]