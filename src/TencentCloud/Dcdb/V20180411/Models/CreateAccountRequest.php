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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of dcdbt-ow728lmc, which can be obtained through the `DescribeDCDBInstances` API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of dcdbt-ow728lmc, which can be obtained through the `DescribeDCDBInstances` API.
 * @method string getUserName() Obtain AccountName
 * @method void setUserName(string $UserName) Set AccountName
 * @method string getHost() Obtain Host that can be logged in to, which is in the same format as the host of the MySQL account and supports wildcards, such as %, 10.%, and 10.20.%.
 * @method void setHost(string $Host) Set Host that can be logged in to, which is in the same format as the host of the MySQL account and supports wildcards, such as %, 10.%, and 10.20.%.
 * @method string getPassword() Obtain Account password. It must contain 8-32 characters in all of the following four types: lowercase letters, uppercase letters, digits, and symbols (()~!@#$%^&*-+=_|{}[]:<>,.?/), and cannot start with a slash (/).
 * @method void setPassword(string $Password) Set Account password. It must contain 8-32 characters in all of the following four types: lowercase letters, uppercase letters, digits, and symbols (()~!@#$%^&*-+=_|{}[]:<>,.?/), and cannot start with a slash (/).
 * @method integer getReadOnly() Obtain Whether to create a read-only account. 0: no; 1: for the account's SQL requests, the secondary will be used first, and if it is unavailable, the primary will be used; 2: the secondary will be used first, and if it is unavailable, the operation will fail; 3: only the secondary will be read from.
 * @method void setReadOnly(integer $ReadOnly) Set Whether to create a read-only account. 0: no; 1: for the account's SQL requests, the secondary will be used first, and if it is unavailable, the primary will be used; 2: the secondary will be used first, and if it is unavailable, the operation will fail; 3: only the secondary will be read from.
 * @method string getDescription() Obtain Account remarks, which can contain 0-256 letters, digits, and common symbols.
 * @method void setDescription(string $Description) Set Account remarks, which can contain 0-256 letters, digits, and common symbols.
 * @method integer getDelayThresh() Obtain If the secondary delay exceeds the set value of this parameter, the secondary will be deemed to have failed.
It is recommended that this parameter be set to a value greater than 10. This parameter takes effect when `ReadOnly` is 1 or 2.
 * @method void setDelayThresh(integer $DelayThresh) Set If the secondary delay exceeds the set value of this parameter, the secondary will be deemed to have failed.
It is recommended that this parameter be set to a value greater than 10. This parameter takes effect when `ReadOnly` is 1 or 2.
 * @method integer getSlaveConst() Obtain Whether to specify a replica server for read-only account. Valid values: `0` (No replica server is specified, which means that the proxy will select another available replica server to keep connection with the client if the current replica server doesn’t meet the requirement). `1` (The replica server is specified, which means that the connection will be disconnected if the specified replica server doesn’t meet the requirement.)
 * @method void setSlaveConst(integer $SlaveConst) Set Whether to specify a replica server for read-only account. Valid values: `0` (No replica server is specified, which means that the proxy will select another available replica server to keep connection with the client if the current replica server doesn’t meet the requirement). `1` (The replica server is specified, which means that the connection will be disconnected if the specified replica server doesn’t meet the requirement.)
 * @method integer getMaxUserConnections() Obtain Maximum number of connections. If left empty or `0` is passed in, the connections will be unlimited. This parameter configuration is not supported for kernel version 10.1.
 * @method void setMaxUserConnections(integer $MaxUserConnections) Set Maximum number of connections. If left empty or `0` is passed in, the connections will be unlimited. This parameter configuration is not supported for kernel version 10.1.
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of dcdbt-ow728lmc, which can be obtained through the `DescribeDCDBInstances` API.
     */
    public $InstanceId;

    /**
     * @var string AccountName
     */
    public $UserName;

    /**
     * @var string Host that can be logged in to, which is in the same format as the host of the MySQL account and supports wildcards, such as %, 10.%, and 10.20.%.
     */
    public $Host;

    /**
     * @var string Account password. It must contain 8-32 characters in all of the following four types: lowercase letters, uppercase letters, digits, and symbols (()~!@#$%^&*-+=_|{}[]:<>,.?/), and cannot start with a slash (/).
     */
    public $Password;

    /**
     * @var integer Whether to create a read-only account. 0: no; 1: for the account's SQL requests, the secondary will be used first, and if it is unavailable, the primary will be used; 2: the secondary will be used first, and if it is unavailable, the operation will fail; 3: only the secondary will be read from.
     */
    public $ReadOnly;

    /**
     * @var string Account remarks, which can contain 0-256 letters, digits, and common symbols.
     */
    public $Description;

    /**
     * @var integer If the secondary delay exceeds the set value of this parameter, the secondary will be deemed to have failed.
It is recommended that this parameter be set to a value greater than 10. This parameter takes effect when `ReadOnly` is 1 or 2.
     */
    public $DelayThresh;

    /**
     * @var integer Whether to specify a replica server for read-only account. Valid values: `0` (No replica server is specified, which means that the proxy will select another available replica server to keep connection with the client if the current replica server doesn’t meet the requirement). `1` (The replica server is specified, which means that the connection will be disconnected if the specified replica server doesn’t meet the requirement.)
     */
    public $SlaveConst;

    /**
     * @var integer Maximum number of connections. If left empty or `0` is passed in, the connections will be unlimited. This parameter configuration is not supported for kernel version 10.1.
     */
    public $MaxUserConnections;

    /**
     * @param string $InstanceId Instance ID in the format of dcdbt-ow728lmc, which can be obtained through the `DescribeDCDBInstances` API.
     * @param string $UserName AccountName
     * @param string $Host Host that can be logged in to, which is in the same format as the host of the MySQL account and supports wildcards, such as %, 10.%, and 10.20.%.
     * @param string $Password Account password. It must contain 8-32 characters in all of the following four types: lowercase letters, uppercase letters, digits, and symbols (()~!@#$%^&*-+=_|{}[]:<>,.?/), and cannot start with a slash (/).
     * @param integer $ReadOnly Whether to create a read-only account. 0: no; 1: for the account's SQL requests, the secondary will be used first, and if it is unavailable, the primary will be used; 2: the secondary will be used first, and if it is unavailable, the operation will fail; 3: only the secondary will be read from.
     * @param string $Description Account remarks, which can contain 0-256 letters, digits, and common symbols.
     * @param integer $DelayThresh If the secondary delay exceeds the set value of this parameter, the secondary will be deemed to have failed.
It is recommended that this parameter be set to a value greater than 10. This parameter takes effect when `ReadOnly` is 1 or 2.
     * @param integer $SlaveConst Whether to specify a replica server for read-only account. Valid values: `0` (No replica server is specified, which means that the proxy will select another available replica server to keep connection with the client if the current replica server doesn’t meet the requirement). `1` (The replica server is specified, which means that the connection will be disconnected if the specified replica server doesn’t meet the requirement.)
     * @param integer $MaxUserConnections Maximum number of connections. If left empty or `0` is passed in, the connections will be unlimited. This parameter configuration is not supported for kernel version 10.1.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DelayThresh",$param) and $param["DelayThresh"] !== null) {
            $this->DelayThresh = $param["DelayThresh"];
        }

        if (array_key_exists("SlaveConst",$param) and $param["SlaveConst"] !== null) {
            $this->SlaveConst = $param["SlaveConst"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }
    }
}
