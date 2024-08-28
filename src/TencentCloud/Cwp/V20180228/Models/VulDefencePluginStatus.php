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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host vulnerability defense plugin information
 *
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getAlias() Obtain Host alias
 * @method void setAlias(string $Alias) Set Host alias
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method integer getException() Obtain Plugin status: 0 - normal; 1 - abnormal
 * @method void setException(integer $Exception) Set Plugin status: 0 - normal; 1 - abnormal
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Last update time
 * @method void setModifyTime(string $ModifyTime) Set Last update time
 */
class VulDefencePluginStatus extends AbstractModel
{
    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host alias
     */
    public $Alias;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var integer Plugin status: 0 - normal; 1 - abnormal
     */
    public $Exception;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Last update time
     */
    public $ModifyTime;

    /**
     * @param string $Quuid Host QUUID
     * @param string $Alias Host alias
     * @param string $PrivateIp Private IP address
     * @param string $PublicIp Public IP address
     * @param integer $Exception Plugin status: 0 - normal; 1 - abnormal
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Last update time
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Exception",$param) and $param["Exception"] !== null) {
            $this->Exception = $param["Exception"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
