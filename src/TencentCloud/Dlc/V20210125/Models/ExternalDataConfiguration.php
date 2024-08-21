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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * External table configuration
 *
 * @method DMSSds getSds() Obtain Metadata storage object
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSds(DMSSds $Sds) Set Metadata storage object
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getViewOriginalText() Obtain View text
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setViewOriginalText(string $ViewOriginalText) Set View text
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getViewExpandedText() Obtain View text
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setViewExpandedText(string $ViewExpandedText) Set View text
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRetention() Obtain Hive maintenance version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetention(integer $Retention) Set Hive maintenance version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLifeTime() Obtain Lifecycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifeTime(integer $LifeTime) Set Lifecycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPartitions() Obtain Partition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitions(array $Partitions) Set Partition
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ExternalDataConfiguration extends AbstractModel
{
    /**
     * @var DMSSds Metadata storage object
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sds;

    /**
     * @var string View text
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ViewOriginalText;

    /**
     * @var string View text
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ViewExpandedText;

    /**
     * @var integer Hive maintenance version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Retention;

    /**
     * @var integer Lifecycle
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifeTime;

    /**
     * @var array Partition
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Partitions;

    /**
     * @param DMSSds $Sds Metadata storage object
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ViewOriginalText View text
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ViewExpandedText View text
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Retention Hive maintenance version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LifeTime Lifecycle
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Partitions Partition
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Sds",$param) and $param["Sds"] !== null) {
            $this->Sds = new DMSSds();
            $this->Sds->deserialize($param["Sds"]);
        }

        if (array_key_exists("ViewOriginalText",$param) and $param["ViewOriginalText"] !== null) {
            $this->ViewOriginalText = $param["ViewOriginalText"];
        }

        if (array_key_exists("ViewExpandedText",$param) and $param["ViewExpandedText"] !== null) {
            $this->ViewExpandedText = $param["ViewExpandedText"];
        }

        if (array_key_exists("Retention",$param) and $param["Retention"] !== null) {
            $this->Retention = $param["Retention"];
        }

        if (array_key_exists("LifeTime",$param) and $param["LifeTime"] !== null) {
            $this->LifeTime = $param["LifeTime"];
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new DMSPartition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }
    }
}
