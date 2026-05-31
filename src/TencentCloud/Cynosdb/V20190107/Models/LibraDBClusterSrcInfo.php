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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Source database information of the libra analysis cluster
 *
 * @method string getSrcInstanceType() Obtain Source endpoint type
 * @method void setSrcInstanceType(string $SrcInstanceType) Set Source endpoint type
 * @method string getAccessType() Obtain Network type.
 * @method void setAccessType(string $AccessType) Set Network type.
 * @method string getSrcInstanceId() Obtain Source instance ID
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance ID
 * @method string getSrcClusterId() Obtain Source cluster ID
 * @method void setSrcClusterId(string $SrcClusterId) Set Source cluster ID
 * @method string getIP() Obtain Address.
 * @method void setIP(string $IP) Set Address.
 * @method string getPort() Obtain Port.
 * @method void setPort(string $Port) Set Port.
 * @method string getUser() Obtain Username.
 * @method void setUser(string $User) Set Username.
 * @method string getPassword() Obtain Password.
 * @method void setPassword(string $Password) Set Password.
 * @method string getSqlMode() Obtain Source sql mode
 * @method void setSqlMode(string $SqlMode) Set Source sql mode
 * @method integer getSrcAppId() Obtain Source application id
 * @method void setSrcAppId(integer $SrcAppId) Set Source application id
 * @method string getSrcUin() Obtain source account
 * @method void setSrcUin(string $SrcUin) Set source account
 * @method string getSrcSubAccountUin() Obtain sub-account
 * @method void setSrcSubAccountUin(string $SrcSubAccountUin) Set sub-account
 * @method string getAccountMode() Obtain Account
 * @method void setAccountMode(string $AccountMode) Set Account
 * @method string getRegion() Obtain Source instance region
 * @method void setRegion(string $Region) Set Source instance region
 * @method string getOperation() Obtain Operation of the source instance
 * @method void setOperation(string $Operation) Set Operation of the source instance
 */
class LibraDBClusterSrcInfo extends AbstractModel
{
    /**
     * @var string Source endpoint type
     */
    public $SrcInstanceType;

    /**
     * @var string Network type.
     */
    public $AccessType;

    /**
     * @var string Source instance ID
     */
    public $SrcInstanceId;

    /**
     * @var string Source cluster ID
     */
    public $SrcClusterId;

    /**
     * @var string Address.
     */
    public $IP;

    /**
     * @var string Port.
     */
    public $Port;

    /**
     * @var string Username.
     */
    public $User;

    /**
     * @var string Password.
     */
    public $Password;

    /**
     * @var string Source sql mode
     */
    public $SqlMode;

    /**
     * @var integer Source application id
     */
    public $SrcAppId;

    /**
     * @var string source account
     */
    public $SrcUin;

    /**
     * @var string sub-account
     */
    public $SrcSubAccountUin;

    /**
     * @var string Account
     */
    public $AccountMode;

    /**
     * @var string Source instance region
     */
    public $Region;

    /**
     * @var string Operation of the source instance
     */
    public $Operation;

    /**
     * @param string $SrcInstanceType Source endpoint type
     * @param string $AccessType Network type.
     * @param string $SrcInstanceId Source instance ID
     * @param string $SrcClusterId Source cluster ID
     * @param string $IP Address.
     * @param string $Port Port.
     * @param string $User Username.
     * @param string $Password Password.
     * @param string $SqlMode Source sql mode
     * @param integer $SrcAppId Source application id
     * @param string $SrcUin source account
     * @param string $SrcSubAccountUin sub-account
     * @param string $AccountMode Account
     * @param string $Region Source instance region
     * @param string $Operation Operation of the source instance
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
        if (array_key_exists("SrcInstanceType",$param) and $param["SrcInstanceType"] !== null) {
            $this->SrcInstanceType = $param["SrcInstanceType"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("SrcClusterId",$param) and $param["SrcClusterId"] !== null) {
            $this->SrcClusterId = $param["SrcClusterId"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SqlMode",$param) and $param["SqlMode"] !== null) {
            $this->SqlMode = $param["SqlMode"];
        }

        if (array_key_exists("SrcAppId",$param) and $param["SrcAppId"] !== null) {
            $this->SrcAppId = $param["SrcAppId"];
        }

        if (array_key_exists("SrcUin",$param) and $param["SrcUin"] !== null) {
            $this->SrcUin = $param["SrcUin"];
        }

        if (array_key_exists("SrcSubAccountUin",$param) and $param["SrcSubAccountUin"] !== null) {
            $this->SrcSubAccountUin = $param["SrcSubAccountUin"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
