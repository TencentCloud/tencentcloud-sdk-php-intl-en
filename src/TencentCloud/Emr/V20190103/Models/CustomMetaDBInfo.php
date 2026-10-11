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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User-defined database information.
 *
 * @method string getMetaDataJdbcUrl() Obtain <p>Custom MetaDB JDBC connection, for example: jdbc:mysql://10.10.10.10:3306/dbname.</p>
 * @method void setMetaDataJdbcUrl(string $MetaDataJdbcUrl) Set <p>Custom MetaDB JDBC connection, for example: jdbc:mysql://10.10.10.10:3306/dbname.</p>
 * @method string getMetaDataUser() Obtain <p>Custom MetaDB username.</p>
 * @method void setMetaDataUser(string $MetaDataUser) Set <p>Custom MetaDB username.</p>
 * @method string getMetaDataPass() Obtain <p>Custom MetaDB password.</p>
 * @method void setMetaDataPass(string $MetaDataPass) Set <p>Custom MetaDB password.</p>
 * @method string getMetaType() Obtain <p>Hive shared metadata database type. Valid values:</p><li>EMR_DEFAULT_META: created by the cluster by default</li><li>EMR_EXIST_META: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
 * @method void setMetaType(string $MetaType) Set <p>Hive shared metadata database type. Valid values:</p><li>EMR_DEFAULT_META: created by the cluster by default</li><li>EMR_EXIST_META: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
 * @method string getUnifyMetaInstanceId() Obtain <p>EMR-MetaDB instance.</p>
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) Set <p>EMR-MetaDB instance.</p>
 * @method array getComponents() Obtain <p>Component.</p>
 * @method void setComponents(array $Components) Set <p>Component.</p>
 * @method string getDefaultMetaVersion() Obtain <p>MetaDB version.</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) Set <p>MetaDB version.</p>
 * @method string getLinkInstanceId() Obtain <p>CDBId</p>
 * @method void setLinkInstanceId(string $LinkInstanceId) Set <p>CDBId</p>
 */
class CustomMetaDBInfo extends AbstractModel
{
    /**
     * @var string <p>Custom MetaDB JDBC connection, for example: jdbc:mysql://10.10.10.10:3306/dbname.</p>
     */
    public $MetaDataJdbcUrl;

    /**
     * @var string <p>Custom MetaDB username.</p>
     */
    public $MetaDataUser;

    /**
     * @var string <p>Custom MetaDB password.</p>
     */
    public $MetaDataPass;

    /**
     * @var string <p>Hive shared metadata database type. Valid values:</p><li>EMR_DEFAULT_META: created by the cluster by default</li><li>EMR_EXIST_META: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
     */
    public $MetaType;

    /**
     * @var string <p>EMR-MetaDB instance.</p>
     */
    public $UnifyMetaInstanceId;

    /**
     * @var array <p>Component.</p>
     */
    public $Components;

    /**
     * @var string <p>MetaDB version.</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var string <p>CDBId</p>
     */
    public $LinkInstanceId;

    /**
     * @param string $MetaDataJdbcUrl <p>Custom MetaDB JDBC connection, for example: jdbc:mysql://10.10.10.10:3306/dbname.</p>
     * @param string $MetaDataUser <p>Custom MetaDB username.</p>
     * @param string $MetaDataPass <p>Custom MetaDB password.</p>
     * @param string $MetaType <p>Hive shared metadata database type. Valid values:</p><li>EMR_DEFAULT_META: created by the cluster by default</li><li>EMR_EXIST_META: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
     * @param string $UnifyMetaInstanceId <p>EMR-MetaDB instance.</p>
     * @param array $Components <p>Component.</p>
     * @param string $DefaultMetaVersion <p>MetaDB version.</p>
     * @param string $LinkInstanceId <p>CDBId</p>
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
        if (array_key_exists("MetaDataJdbcUrl",$param) and $param["MetaDataJdbcUrl"] !== null) {
            $this->MetaDataJdbcUrl = $param["MetaDataJdbcUrl"];
        }

        if (array_key_exists("MetaDataUser",$param) and $param["MetaDataUser"] !== null) {
            $this->MetaDataUser = $param["MetaDataUser"];
        }

        if (array_key_exists("MetaDataPass",$param) and $param["MetaDataPass"] !== null) {
            $this->MetaDataPass = $param["MetaDataPass"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("UnifyMetaInstanceId",$param) and $param["UnifyMetaInstanceId"] !== null) {
            $this->UnifyMetaInstanceId = $param["UnifyMetaInstanceId"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("DefaultMetaVersion",$param) and $param["DefaultMetaVersion"] !== null) {
            $this->DefaultMetaVersion = $param["DefaultMetaVersion"];
        }

        if (array_key_exists("LinkInstanceId",$param) and $param["LinkInstanceId"] !== null) {
            $this->LinkInstanceId = $param["LinkInstanceId"];
        }
    }
}
