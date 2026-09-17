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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getStorageMode() Obtain 
 * @method void setStorageMode(string $StorageMode) Set 
 * @method string getMediaName() Obtain 
 * @method void setMediaName(string $MediaName) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method string getResolution() Obtain 
 * @method void setResolution(string $Resolution) Set 
 * @method string getAspectRatio() Obtain 
 * @method void setAspectRatio(string $AspectRatio) Set 
 * @method string getPersonGeneration() Obtain 
 * @method void setPersonGeneration(string $PersonGeneration) Set 
 * @method string getInputComplianceCheck() Obtain 
 * @method void setInputComplianceCheck(string $InputComplianceCheck) Set 
 * @method string getOutputComplianceCheck() Obtain 
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) Set 
 * @method integer getOutputImageCount() Obtain 
 * @method void setOutputImageCount(integer $OutputImageCount) Set 
 * @method string getOutputFormat() Obtain 
 * @method void setOutputFormat(string $OutputFormat) Set 
 * @method string getLogoAdd() Obtain 
 * @method void setLogoAdd(string $LogoAdd) Set 
 */
class AigcImageOutputConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $StorageMode;

    /**
     * @var string 
     */
    public $MediaName;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var string 
     */
    public $Resolution;

    /**
     * @var string 
     */
    public $AspectRatio;

    /**
     * @var string 
     */
    public $PersonGeneration;

    /**
     * @var string 
     */
    public $InputComplianceCheck;

    /**
     * @var string 
     */
    public $OutputComplianceCheck;

    /**
     * @var integer 
     */
    public $OutputImageCount;

    /**
     * @var string 
     */
    public $OutputFormat;

    /**
     * @var string 
     */
    public $LogoAdd;

    /**
     * @param string $StorageMode 
     * @param string $MediaName 
     * @param integer $ClassId 
     * @param string $ExpireTime 
     * @param string $Resolution 
     * @param string $AspectRatio 
     * @param string $PersonGeneration 
     * @param string $InputComplianceCheck 
     * @param string $OutputComplianceCheck 
     * @param integer $OutputImageCount 
     * @param string $OutputFormat 
     * @param string $LogoAdd 
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("PersonGeneration",$param) and $param["PersonGeneration"] !== null) {
            $this->PersonGeneration = $param["PersonGeneration"];
        }

        if (array_key_exists("InputComplianceCheck",$param) and $param["InputComplianceCheck"] !== null) {
            $this->InputComplianceCheck = $param["InputComplianceCheck"];
        }

        if (array_key_exists("OutputComplianceCheck",$param) and $param["OutputComplianceCheck"] !== null) {
            $this->OutputComplianceCheck = $param["OutputComplianceCheck"];
        }

        if (array_key_exists("OutputImageCount",$param) and $param["OutputImageCount"] !== null) {
            $this->OutputImageCount = $param["OutputImageCount"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }
    }
}
