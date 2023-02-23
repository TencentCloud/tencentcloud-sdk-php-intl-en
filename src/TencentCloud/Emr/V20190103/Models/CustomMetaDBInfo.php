<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * The user-created Hive-MetaDB instance information.
 *
 * @method string getMetaDataJdbcUrl() Obtain The JDBC URL of the custom metadatabase instance. Example: jdbc:mysql://10.10.10.10:3306/dbname
 * @method void setMetaDataJdbcUrl(string $MetaDataJdbcUrl) Set The JDBC URL of the custom metadatabase instance. Example: jdbc:mysql://10.10.10.10:3306/dbname
 * @method string getMetaDataUser() Obtain The custom metadatabase instance username.
 * @method void setMetaDataUser(string $MetaDataUser) Set The custom metadatabase instance username.
 * @method string getMetaDataPass() Obtain The custom metadatabase instance password.
 * @method void setMetaDataPass(string $MetaDataPass) Set The custom metadatabase instance password.
 * @method string getMetaType() Obtain The Hive-shared metadatabase type. Valid values:
<li>`EMR_DEFAULT_META`: The cluster creates one by default.</li>
<li>`EMR_EXIST_META`: The cluster uses the specified EMR metadatabase instance.</li>
<li>`USER_CUSTOM_META`: The cluster uses a custom metadatabase instance.</li>
 * @method void setMetaType(string $MetaType) Set The Hive-shared metadatabase type. Valid values:
<li>`EMR_DEFAULT_META`: The cluster creates one by default.</li>
<li>`EMR_EXIST_META`: The cluster uses the specified EMR metadatabase instance.</li>
<li>`USER_CUSTOM_META`: The cluster uses a custom metadatabase instance.</li>
 * @method string getUnifyMetaInstanceId() Obtain The EMR-MetaDB instance.
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) Set The EMR-MetaDB instance.
 */
class CustomMetaDBInfo extends AbstractModel
{
    /**
     * @var string The JDBC URL of the custom metadatabase instance. Example: jdbc:mysql://10.10.10.10:3306/dbname
     */
    public $MetaDataJdbcUrl;

    /**
     * @var string The custom metadatabase instance username.
     */
    public $MetaDataUser;

    /**
     * @var string The custom metadatabase instance password.
     */
    public $MetaDataPass;

    /**
     * @var string The Hive-shared metadatabase type. Valid values:
<li>`EMR_DEFAULT_META`: The cluster creates one by default.</li>
<li>`EMR_EXIST_META`: The cluster uses the specified EMR metadatabase instance.</li>
<li>`USER_CUSTOM_META`: The cluster uses a custom metadatabase instance.</li>
     */
    public $MetaType;

    /**
     * @var string The EMR-MetaDB instance.
     */
    public $UnifyMetaInstanceId;

    /**
     * @param string $MetaDataJdbcUrl The JDBC URL of the custom metadatabase instance. Example: jdbc:mysql://10.10.10.10:3306/dbname
     * @param string $MetaDataUser The custom metadatabase instance username.
     * @param string $MetaDataPass The custom metadatabase instance password.
     * @param string $MetaType The Hive-shared metadatabase type. Valid values:
<li>`EMR_DEFAULT_META`: The cluster creates one by default.</li>
<li>`EMR_EXIST_META`: The cluster uses the specified EMR metadatabase instance.</li>
<li>`USER_CUSTOM_META`: The cluster uses a custom metadatabase instance.</li>
     * @param string $UnifyMetaInstanceId The EMR-MetaDB instance.
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
    }
}
