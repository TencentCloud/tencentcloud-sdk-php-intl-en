<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upload data source file.
 *
 * @method string getTrustStore() Obtain Truststore authentication file, default filename truststore.jks.
 * @method void setTrustStore(string $TrustStore) Set Truststore authentication file, default filename truststore.jks.
 * @method string getKeyStore() Obtain Keystore authentication file, default filename keystore.jks.
 * @method void setKeyStore(string $KeyStore) Set Keystore authentication file, default filename keystore.jks.
 * @method string getCoreSite() Obtain core-site.xml file.
 * @method void setCoreSite(string $CoreSite) Set core-site.xml file.
 * @method string getHdfsSite() Obtain hdfs-site.xml file.
 * @method void setHdfsSite(string $HdfsSite) Set hdfs-site.xml file.
 * @method string getHiveSite() Obtain hive-site.xml file.
 * @method void setHiveSite(string $HiveSite) Set hive-site.xml file.
 * @method string getHBASESite() Obtain hbase-site file.
 * @method void setHBASESite(string $HBASESite) Set hbase-site file.
 * @method string getKeyTab() Obtain Keytab file, default filename [data source name].keytab.
 * @method void setKeyTab(string $KeyTab) Set Keytab file, default filename [data source name].keytab.
 * @method string getKRB5Conf() Obtain krb5.conf file.
 * @method void setKRB5Conf(string $KRB5Conf) Set krb5.conf file.
 * @method string getPrivateKey() Obtain Private key, default filename private_key.pem.
 * @method void setPrivateKey(string $PrivateKey) Set Private key, default filename private_key.pem.
 * @method string getPublicKey() Obtain Public key, default filename public_key.pem.
 * @method void setPublicKey(string $PublicKey) Set Public key, default filename public_key.pem.
 */
class DataSourceFileUpload extends AbstractModel
{
    /**
     * @var string Truststore authentication file, default filename truststore.jks.
     */
    public $TrustStore;

    /**
     * @var string Keystore authentication file, default filename keystore.jks.
     */
    public $KeyStore;

    /**
     * @var string core-site.xml file.
     */
    public $CoreSite;

    /**
     * @var string hdfs-site.xml file.
     */
    public $HdfsSite;

    /**
     * @var string hive-site.xml file.
     */
    public $HiveSite;

    /**
     * @var string hbase-site file.
     */
    public $HBASESite;

    /**
     * @var string Keytab file, default filename [data source name].keytab.
     */
    public $KeyTab;

    /**
     * @var string krb5.conf file.
     */
    public $KRB5Conf;

    /**
     * @var string Private key, default filename private_key.pem.
     */
    public $PrivateKey;

    /**
     * @var string Public key, default filename public_key.pem.
     */
    public $PublicKey;

    /**
     * @param string $TrustStore Truststore authentication file, default filename truststore.jks.
     * @param string $KeyStore Keystore authentication file, default filename keystore.jks.
     * @param string $CoreSite core-site.xml file.
     * @param string $HdfsSite hdfs-site.xml file.
     * @param string $HiveSite hive-site.xml file.
     * @param string $HBASESite hbase-site file.
     * @param string $KeyTab Keytab file, default filename [data source name].keytab.
     * @param string $KRB5Conf krb5.conf file.
     * @param string $PrivateKey Private key, default filename private_key.pem.
     * @param string $PublicKey Public key, default filename public_key.pem.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TrustStore",$param) and $param["TrustStore"] !== null) {
            $this->TrustStore = $param["TrustStore"];
        }

        if (array_key_exists("KeyStore",$param) and $param["KeyStore"] !== null) {
            $this->KeyStore = $param["KeyStore"];
        }

        if (array_key_exists("CoreSite",$param) and $param["CoreSite"] !== null) {
            $this->CoreSite = $param["CoreSite"];
        }

        if (array_key_exists("HdfsSite",$param) and $param["HdfsSite"] !== null) {
            $this->HdfsSite = $param["HdfsSite"];
        }

        if (array_key_exists("HiveSite",$param) and $param["HiveSite"] !== null) {
            $this->HiveSite = $param["HiveSite"];
        }

        if (array_key_exists("HBASESite",$param) and $param["HBASESite"] !== null) {
            $this->HBASESite = $param["HBASESite"];
        }

        if (array_key_exists("KeyTab",$param) and $param["KeyTab"] !== null) {
            $this->KeyTab = $param["KeyTab"];
        }

        if (array_key_exists("KRB5Conf",$param) and $param["KRB5Conf"] !== null) {
            $this->KRB5Conf = $param["KRB5Conf"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }
    }
}
