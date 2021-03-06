require 'spec_helper'

shared_examples_for :gpgkey_7 do
  it do
    should contain_file("/etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-7").with({
      'ensure' => 'present',
      'owner'  => 'root',
      'group'  => 'root',
      'mode'   => '0644',
      'source' => "puppet:///modules/epel/RPM-GPG-KEY-EPEL-7",
    })
  end

  it do
    should contain_epel__rpm_gpg_key("EPEL-7").with({
      'path' => "/etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-7"
    })
  end
end

shared_examples_for :gpgkey_6 do
  it do
    should contain_file("/etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-6").with({
      'ensure' => 'present',
      'owner'  => 'root',
      'group'  => 'root',
      'mode'   => '0644',
      'source' => "puppet:///modules/epel/RPM-GPG-KEY-EPEL-6",
    })
  end

  it do
    should contain_epel__rpm_gpg_key("EPEL-6").with({
      'path' => "/etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-6"
    })
  end
end

shared_examples_for :gpgkey_5 do
  it do
    should contain_file("/etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-5").with({
      'ensure' => 'present',
      'owner'  => 'root',
      'group'  => 'root',
      'mode'   => '0644',
      'source' => "puppet:///modules/epel/RPM-GPG-KEY-EPEL-5",
    })
  end

  it do
    should contain_epel__rpm_gpg_key("EPEL-5").with({
      'path' => "/etc/pki/rpm-gpg/RPM-GPG-KEY-EPEL-5"
    })
  end
end
