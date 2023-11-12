# Generated by Django 4.2.7 on 2023-11-12 00:32

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='City',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('cod_city', models.PositiveIntegerField(verbose_name='Cod Ciudad')),
                ('city', models.CharField(max_length=50, verbose_name='Ciudad')),
            ],
            options={
                'verbose_name': 'Ciudad',
                'verbose_name_plural': 'Ciudades',
                'db_table': 'ciudad',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Domicile_Status',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('cod_status_d', models.PositiveIntegerField(verbose_name='Cod Estado D')),
                ('statud_d', models.CharField(max_length=20, verbose_name='Estado D')),
            ],
            options={
                'verbose_name': 'Estado Domicilio',
                'verbose_name_plural': 'Estado Domicilios',
                'db_table': 'estado_domicilio',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Domicile',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('id_domicile', models.PositiveIntegerField(verbose_name='Id Domicilio')),
                ('guide_number', models.PositiveIntegerField(verbose_name='Numero Guia')),
                ('date', models.DateField(verbose_name='Fecha')),
                ('direction', models.CharField(max_length=50, verbose_name='Dirección')),
                ('cod_status_domicile', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='domicilios.domicile_status')),
            ],
            options={
                'verbose_name': 'Domicilio',
                'verbose_name_plural': 'Domicilios',
                'db_table': 'domicilio',
                'ordering': ['id'],
            },
        ),
        migrations.CreateModel(
            name='Company_Transportation',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('company_nit', models.PositiveIntegerField(verbose_name='Nit Empresa')),
                ('date_domicile', models.DateField(verbose_name='Fecha Entrega')),
                ('id_domicile', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='domicilios.domicile')),
            ],
            options={
                'verbose_name': 'Empresa Trasportadora',
                'verbose_name_plural': 'Empresas Transportadoras',
                'db_table': 'empresa_transportadora',
                'ordering': ['id'],
            },
        ),
    ]