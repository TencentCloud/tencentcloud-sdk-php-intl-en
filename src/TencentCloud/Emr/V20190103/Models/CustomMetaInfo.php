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
 * User-built Hive-MetaDB information.
 *
 * @method string getMetaDataJdbcUrl() Obtain Custom MetaDB JDBC connection, which starts with jdbc:mysql://.
 * @method void setMetaDataJdbcUrl(string $MetaDataJdbcUrl) Set Custom MetaDB JDBC connection, which starts with jdbc:mysql://.
 * @method string getMetaDataUser() Obtain Custom MetaDB username.
 * @method void setMetaDataUser(string $MetaDataUser) Set Custom MetaDB username.
 * @method string getMetaDataPass() Obtain Custom MetaDB password.
 * @method void setMetaDataPass(string $MetaDataPass) Set Custom MetaDB password.
 */
class CustomMetaInfo extends AbstractModel
{
    /**
     * @var string Custom MetaDB JDBC connection, which starts with jdbc:mysql://.
     */
    public $MetaDataJdbcUrl;

    /**
     * @var string Custom MetaDB username.
     */
    public $MetaDataUser;

    /**
     * @var string Custom MetaDB password.
     */
    public $MetaDataPass;

    /**
     * @param string $MetaDataJdbcUrl Custom MetaDB JDBC connection, which starts with jdbc:mysql://.
     * @param string $MetaDataUser Custom MetaDB username.
     * @param string $MetaDataPass Custom MetaDB password.
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
    }
}
