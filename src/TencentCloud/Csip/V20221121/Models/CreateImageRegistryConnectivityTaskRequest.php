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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageRegistryConnectivityTask request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getRegistryName() Obtain <p>Mirror repository name.</p>
 * @method void setRegistryName(string $RegistryName) Set <p>Mirror repository name.</p>
 * @method string getRegistryRegion() Obtain <p>region where the mirror repository is located</p>
 * @method void setRegistryRegion(string $RegistryRegion) Set <p>region where the mirror repository is located</p>
 * @method string getRegistryType() Obtain <p>Image repository type</p>
 * @method void setRegistryType(string $RegistryType) Set <p>Image repository type</p>
 * @method string getApiVersion() Obtain <p>Mirror repository API version</p>
 * @method void setApiVersion(string $ApiVersion) Set <p>Mirror repository API version</p>
 * @method string getUserName() Obtain <p>Account</p>
 * @method void setUserName(string $UserName) Set <p>Account</p>
 * @method string getPassword() Obtain <p>Password</p>
 * @method void setPassword(string $Password) Set <p>Password</p>
 * @method string getUrl() Obtain <p>Mirror repository url.</p>
 * @method void setUrl(string $Url) Set <p>Mirror repository url.</p>
 * @method array getParams() Obtain <p>Link check parameters</p>
 * @method void setParams(array $Params) Set <p>Link check parameters</p>
 * @method integer getRegistryId() Obtain <p>Repository id</p>
 * @method void setRegistryId(integer $RegistryId) Set <p>Repository id</p>
 * @method string getInstanceId() Obtain <p>Repository instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Repository instance id</p>
 */
class CreateImageRegistryConnectivityTaskRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Mirror repository name.</p>
     */
    public $RegistryName;

    /**
     * @var string <p>region where the mirror repository is located</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>Image repository type</p>
     */
    public $RegistryType;

    /**
     * @var string <p>Mirror repository API version</p>
     */
    public $ApiVersion;

    /**
     * @var string <p>Account</p>
     */
    public $UserName;

    /**
     * @var string <p>Password</p>
     */
    public $Password;

    /**
     * @var string <p>Mirror repository url.</p>
     */
    public $Url;

    /**
     * @var array <p>Link check parameters</p>
     */
    public $Params;

    /**
     * @var integer <p>Repository id</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Repository instance id</p>
     */
    public $InstanceId;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param string $RegistryName <p>Mirror repository name.</p>
     * @param string $RegistryRegion <p>region where the mirror repository is located</p>
     * @param string $RegistryType <p>Image repository type</p>
     * @param string $ApiVersion <p>Mirror repository API version</p>
     * @param string $UserName <p>Account</p>
     * @param string $Password <p>Password</p>
     * @param string $Url <p>Mirror repository url.</p>
     * @param array $Params <p>Link check parameters</p>
     * @param integer $RegistryId <p>Repository id</p>
     * @param string $InstanceId <p>Repository instance id</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ApiVersion",$param) and $param["ApiVersion"] !== null) {
            $this->ApiVersion = $param["ApiVersion"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new ImageRegistryDetectionHostParam();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
