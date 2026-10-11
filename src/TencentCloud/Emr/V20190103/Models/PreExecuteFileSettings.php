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
 * @method string getPath() Obtain Script path on COS, which has been deprecated.
 * @method void setPath(string $Path) Set Script path on COS, which has been deprecated.
 * @method array getArgs() Obtain Script execution parameter.
 * @method void setArgs(array $Args) Set Script execution parameter.
 * @method string getBucket() Obtain COS bucket name, which has been deprecated.
 * @method void setBucket(string $Bucket) Set COS bucket name, which has been deprecated.
 * @method string getRegion() Obtain COS region name, which has been deprecated.
 * @method void setRegion(string $Region) Set COS region name, which has been deprecated.
 * @method string getDomain() Obtain COS domain data, which has been deprecated.
 * @method void setDomain(string $Domain) Set COS domain data, which has been deprecated.
 * @method integer getRunOrder() Obtain Execution order.
 * @method void setRunOrder(integer $RunOrder) Set Execution order.
 * @method string getWhenRun() Obtain Whether resourceAfter or clusterAfter is used.
 * @method void setWhenRun(string $WhenRun) Set Whether resourceAfter or clusterAfter is used.
 * @method string getCosFileName() Obtain Script file name, which has been deprecated.
 * @method void setCosFileName(string $CosFileName) Set Script file name, which has been deprecated.
 * @method string getCosFileURI() Obtain COS address of the script.
 * @method void setCosFileURI(string $CosFileURI) Set COS address of the script.
 * @method string getCosSecretId() Obtain COS SecretId.
 * @method void setCosSecretId(string $CosSecretId) Set COS SecretId.
 * @method string getCosSecretKey() Obtain COS SecretKey.
 * @method void setCosSecretKey(string $CosSecretKey) Set COS SecretKey.
 * @method string getAppId() Obtain COS APPID, which has been deprecated.
 * @method void setAppId(string $AppId) Set COS APPID, which has been deprecated.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 */
class PreExecuteFileSettings extends AbstractModel
{
    /**
     * @var string Script path on COS, which has been deprecated.
     */
    public $Path;

    /**
     * @var array Script execution parameter.
     */
    public $Args;

    /**
     * @var string COS bucket name, which has been deprecated.
     */
    public $Bucket;

    /**
     * @var string COS region name, which has been deprecated.
     */
    public $Region;

    /**
     * @var string COS domain data, which has been deprecated.
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
     * @var string Script file name, which has been deprecated.
     */
    public $CosFileName;

    /**
     * @var string COS address of the script.
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
     * @var string COS APPID, which has been deprecated.
     */
    public $AppId;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @param string $Path Script path on COS, which has been deprecated.
     * @param array $Args Script execution parameter.
     * @param string $Bucket COS bucket name, which has been deprecated.
     * @param string $Region COS region name, which has been deprecated.
     * @param string $Domain COS domain data, which has been deprecated.
     * @param integer $RunOrder Execution order.
     * @param string $WhenRun Whether resourceAfter or clusterAfter is used.
     * @param string $CosFileName Script file name, which has been deprecated.
     * @param string $CosFileURI COS address of the script.
     * @param string $CosSecretId COS SecretId.
     * @param string $CosSecretKey COS SecretKey.
     * @param string $AppId COS APPID, which has been deprecated.
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
