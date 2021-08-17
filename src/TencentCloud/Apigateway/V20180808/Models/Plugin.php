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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the API Gateway plugin
 *
 * @method string getPluginId() Obtain Plugin ID
 * @method void setPluginId(string $PluginId) Set Plugin ID
 * @method string getPluginName() Obtain Plugin name
 * @method void setPluginName(string $PluginName) Set Plugin name
 * @method string getPluginType() Obtain Plugin type
 * @method void setPluginType(string $PluginType) Set Plugin type
 * @method string getPluginData() Obtain Plugin definition statement
 * @method void setPluginData(string $PluginData) Set Plugin definition statement
 * @method string getDescription() Obtain Plugin description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Plugin description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Plugin creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
 * @method void setCreatedTime(string $CreatedTime) Set Plugin creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
 * @method string getModifiedTime() Obtain Plugin modification time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used
 * @method void setModifiedTime(string $ModifiedTime) Set Plugin modification time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used
 * @method integer getAttachedApiTotalCount() Obtain Total number of APIs bound with the plugin
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAttachedApiTotalCount(integer $AttachedApiTotalCount) Set Total number of APIs bound with the plugin
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAttachedApis() Obtain Information of the API bound with the plugin
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAttachedApis(array $AttachedApis) Set Information of the API bound with the plugin
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Plugin extends AbstractModel
{
    /**
     * @var string Plugin ID
     */
    public $PluginId;

    /**
     * @var string Plugin name
     */
    public $PluginName;

    /**
     * @var string Plugin type
     */
    public $PluginType;

    /**
     * @var string Plugin definition statement
     */
    public $PluginData;

    /**
     * @var string Plugin description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Plugin creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
     */
    public $CreatedTime;

    /**
     * @var string Plugin modification time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used
     */
    public $ModifiedTime;

    /**
     * @var integer Total number of APIs bound with the plugin
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AttachedApiTotalCount;

    /**
     * @var array Information of the API bound with the plugin
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AttachedApis;

    /**
     * @param string $PluginId Plugin ID
     * @param string $PluginName Plugin name
     * @param string $PluginType Plugin type
     * @param string $PluginData Plugin definition statement
     * @param string $Description Plugin description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Plugin creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
     * @param string $ModifiedTime Plugin modification time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used
     * @param integer $AttachedApiTotalCount Total number of APIs bound with the plugin
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AttachedApis Information of the API bound with the plugin
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("PluginData",$param) and $param["PluginData"] !== null) {
            $this->PluginData = $param["PluginData"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("AttachedApiTotalCount",$param) and $param["AttachedApiTotalCount"] !== null) {
            $this->AttachedApiTotalCount = $param["AttachedApiTotalCount"];
        }

        if (array_key_exists("AttachedApis",$param) and $param["AttachedApis"] !== null) {
            $this->AttachedApis = [];
            foreach ($param["AttachedApis"] as $key => $value){
                $obj = new AttachedApiInfo();
                $obj->deserialize($value);
                array_push($this->AttachedApis, $obj);
            }
        }
    }
}
