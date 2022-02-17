@servers(['web' => 'deployer@192.168.68.69'])

@task('list', ['on' => 'web'])
    ls -l
@endtask
