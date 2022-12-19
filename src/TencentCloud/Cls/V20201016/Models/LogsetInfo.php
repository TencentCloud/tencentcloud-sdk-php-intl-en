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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logset information
 *
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getLogsetName() Obtain Logset name
 * @method void setLogsetName(string $LogsetName) Set Logset name
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getAssumerName() Obtain Cloud product identifier. If the logset is created by another cloud product, this field returns the name of the cloud product, such as `CDN` or `TKE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssumerName(string $AssumerName) Set Cloud product identifier. If the logset is created by another cloud product, this field returns the name of the cloud product, such as `CDN` or `TKE`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag bound to logset
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag bound to logset
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTopicCount() Obtain Number of log topics in logset
 * @method void setTopicCount(integer $TopicCount) Set Number of log topics in logset
 * @method string getRoleName() Obtain If `AssumerName` is not empty, it indicates the service provider who creates the logset.
 * @method void setRoleName(string $RoleName) Set If `AssumerName` is not empty, it indicates the service provider who creates the logset.
 */
class LogsetInfo extends AbstractModel
{
    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Logset name
     */
    public $LogsetName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Cloud product identifier. If the logset is created by another cloud product, this field returns the name of the cloud product, such as `CDN` or `TKE`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssumerName;

    /**
     * @var array Tag bound to logset
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Number of log topics in logset
     */
    public $TopicCount;

    /**
     * @var string If `AssumerName` is not empty, it indicates the service provider who creates the logset.
     */
    public $RoleName;

    /**
     * @param string $LogsetId Logset ID
     * @param string $LogsetName Logset name
     * @param string $CreateTime Creation time
     * @param string $AssumerName Cloud product identifier. If the logset is created by another cloud product, this field returns the name of the cloud product, such as `CDN` or `TKE`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag bound to logset
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TopicCount Number of log topics in logset
     * @param string $RoleName If `AssumerName` is not empty, it indicates the service provider who creates the logset.
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TopicCount",$param) and $param["TopicCount"] !== null) {
            $this->TopicCount = $param["TopicCount"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
