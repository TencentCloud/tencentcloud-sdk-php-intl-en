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
 * Pre-execution script configuration.
 *
 * @method string getPath() Obtain Script path on COS.
 * @method void setPath(string $Path) Set Script path on COS.
 * @method string getArgs() Obtain Script execution parameter.
 * @method void setArgs(string $Args) Set Script execution parameter.
 * @method string getBucket() Obtain COS bucket name.
 * @method void setBucket(string $Bucket) Set COS bucket name.
 * @method string getRegion() Obtain COS region name.
 * @method void setRegion(string $Region) Set COS region name.
 * @method string getDomain() Obtain COS domain data.
 * @method void setDomain(string $Domain) Set COS domain data.
 * @method integer getRunOrder() Obtain Execution order.
 * @method void setRunOrder(integer $RunOrder) Set Execution order.
 * @method string getWhenRun() Obtain Whether resourceAfter or clusterAfter is used.
 * @method void setWhenRun(string $WhenRun) Set Whether resourceAfter or clusterAfter is used.
 * @method string getCosFileName() Obtain Script file name.
 * @method void setCosFileName(string $CosFileName) Set Script file name.
 * @method string getCosFileURI() Obtain Script's COS address.
 * @method void setCosFileURI(string $CosFileURI) Set Script's COS address.
 * @method string getCosSecretId() Obtain COS SecretId.
 * @method void setCosSecretId(string $CosSecretId) Set COS SecretId.
 * @method string getCosSecretKey() Obtain COS SecretKey.
 * @method void setCosSecretKey(string $CosSecretKey) Set COS SecretKey.
 * @method string getAppId() Obtain COS APPID.
 * @method void setAppId(string $AppId) Set COS APPID.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 */
class PreExecuteFileSetting extends AbstractModel
{
    /**
     * @var string Script path on COS.
     */
    public $Path;

    /**
     * @var string Script execution parameter.
     */
    public $Args;

    /**
     * @var string COS bucket name.
     */
    public $Bucket;

    /**
     * @var string COS region name.
     */
    public $Region;

    /**
     * @var string COS domain data.
     */
    public $Domain;

    /**
     * @var integer Execution order.
     */
    public $RunOrder;

    /**
     * @var string Whether resourceAfter or clusterAfter is used.
     */
    public $WhenRun;

    /**
     * @var string Script file name.
     */
    public $CosFileName;

    /**
     * @var string Script's COS address.
     */
    public $CosFileURI;

    /**
     * @var string COS SecretId.
     */
    public $CosSecretId;

    /**
     * @var string COS SecretKey.
     */
    public $CosSecretKey;

    /**
     * @var string COS APPID.
     */
    public $AppId;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @param string $Path Script path on COS.
     * @param string $Args Script execution parameter.
     * @param string $Bucket COS bucket name.
     * @param string $Region COS region name.
     * @param string $Domain COS domain data.
     * @param integer $RunOrder Execution order.
     * @param string $WhenRun Whether resourceAfter or clusterAfter is used.
     * @param string $CosFileName Script file name.
     * @param string $CosFileURI Script's COS address.
     * @param string $CosSecretId COS SecretId.
     * @param string $CosSecretKey COS SecretKey.
     * @param string $AppId COS APPID.
     * @param string $Remark Remarks.
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RunOrder",$param) and $param["RunOrder"] !== null) {
            $this->RunOrder = $param["RunOrder"];
        }

        if (array_key_exists("WhenRun",$param) and $param["WhenRun"] !== null) {
            $this->WhenRun = $param["WhenRun"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }

        if (array_key_exists("CosFileURI",$param) and $param["CosFileURI"] !== null) {
            $this->CosFileURI = $param["CosFileURI"];
        }

        if (array_key_exists("CosSecretId",$param) and $param["CosSecretId"] !== null) {
            $this->CosSecretId = $param["CosSecretId"];
        }

        if (array_key_exists("CosSecretKey",$param) and $param["CosSecretKey"] !== null) {
            $this->CosSecretKey = $param["CosSecretKey"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
