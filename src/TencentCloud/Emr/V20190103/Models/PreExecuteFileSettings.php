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
 * Pre-execution script configuration
 *
 * @method string getPath() Obtain COS path to script, which has been disused
 * @method void setPath(string $Path) Set COS path to script, which has been disused
 * @method array getArgs() Obtain Execution script parameter
 * @method void setArgs(array $Args) Set Execution script parameter
 * @method string getBucket() Obtain COS bucket name, which has been disused
 * @method void setBucket(string $Bucket) Set COS bucket name, which has been disused
 * @method string getRegion() Obtain COS region name, which has been disused
 * @method void setRegion(string $Region) Set COS region name, which has been disused
 * @method string getDomain() Obtain COS domain data, which has been disused
 * @method void setDomain(string $Domain) Set COS domain data, which has been disused
 * @method integer getRunOrder() Obtain Execution sequence
 * @method void setRunOrder(integer $RunOrder) Set Execution sequence
 * @method string getWhenRun() Obtain `resourceAfter` or `clusterAfter`
 * @method void setWhenRun(string $WhenRun) Set `resourceAfter` or `clusterAfter`
 * @method string getCosFileName() Obtain Script name, which has been disused
 * @method void setCosFileName(string $CosFileName) Set Script name, which has been disused
 * @method string getCosFileURI() Obtain COS address of script
 * @method void setCosFileURI(string $CosFileURI) Set COS address of script
 * @method string getCosSecretId() Obtain COS `SecretId`
 * @method void setCosSecretId(string $CosSecretId) Set COS `SecretId`
 * @method string getCosSecretKey() Obtain COS `SecretKey`
 * @method void setCosSecretKey(string $CosSecretKey) Set COS `SecretKey`
 * @method string getAppId() Obtain COS `appid`, which has been disused
 * @method void setAppId(string $AppId) Set COS `appid`, which has been disused
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class PreExecuteFileSettings extends AbstractModel
{
    /**
     * @var string COS path to script, which has been disused
     */
    public $Path;

    /**
     * @var array Execution script parameter
     */
    public $Args;

    /**
     * @var string COS bucket name, which has been disused
     */
    public $Bucket;

    /**
     * @var string COS region name, which has been disused
     */
    public $Region;

    /**
     * @var string COS domain data, which has been disused
     */
    public $Domain;

    /**
     * @var integer Execution sequence
     */
    public $RunOrder;

    /**
     * @var string `resourceAfter` or `clusterAfter`
     */
    public $WhenRun;

    /**
     * @var string Script name, which has been disused
     */
    public $CosFileName;

    /**
     * @var string COS address of script
     */
    public $CosFileURI;

    /**
     * @var string COS `SecretId`
     */
    public $CosSecretId;

    /**
     * @var string COS `SecretKey`
     */
    public $CosSecretKey;

    /**
     * @var string COS `appid`, which has been disused
     */
    public $AppId;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param string $Path COS path to script, which has been disused
     * @param array $Args Execution script parameter
     * @param string $Bucket COS bucket name, which has been disused
     * @param string $Region COS region name, which has been disused
     * @param string $Domain COS domain data, which has been disused
     * @param integer $RunOrder Execution sequence
     * @param string $WhenRun `resourceAfter` or `clusterAfter`
     * @param string $CosFileName Script name, which has been disused
     * @param string $CosFileURI COS address of script
     * @param string $CosSecretId COS `SecretId`
     * @param string $CosSecretKey COS `SecretKey`
     * @param string $AppId COS `appid`, which has been disused
     * @param string $Remark Remarks
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
