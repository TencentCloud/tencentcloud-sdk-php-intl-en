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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log Switch Details
 *
 * @method boolean getEnable() Obtain Enables Identifier. true means enabled.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setEnable(boolean $Enable) Set Enables Identifier. true means enabled.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getLogsetId() Obtain CLS Logset ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setLogsetId(string $LogsetId) Set CLS Logset ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getTopicId() Obtain CLS Log Topic ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setTopicId(string $TopicId) Set CLS Log Topic ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getVersion() Obtain Current log-agent Version
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setVersion(string $Version) Set Current log-agent Version
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getUpgradeAble() Obtain Upgradable or not

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setUpgradeAble(boolean $UpgradeAble) Set Upgradable or not

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getTopicRegion() Obtain CLS Log Topic Region
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setTopicRegion(string $TopicRegion) Set CLS Log Topic Region
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class SwitchInfo extends AbstractModel
{
    /**
     * @var boolean Enables Identifier. true means enabled.
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Enable;

    /**
     * @var string CLS Logset ID

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $LogsetId;

    /**
     * @var string CLS Log Topic ID

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $TopicId;

    /**
     * @var string Current log-agent Version
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Version;

    /**
     * @var boolean Upgradable or not

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $UpgradeAble;

    /**
     * @var string CLS Log Topic Region
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $TopicRegion;

    /**
     * @param boolean $Enable Enables Identifier. true means enabled.
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $LogsetId CLS Logset ID

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $TopicId CLS Log Topic ID

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Version Current log-agent Version
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $UpgradeAble Upgradable or not

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $TopicRegion CLS Log Topic Region
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("UpgradeAble",$param) and $param["UpgradeAble"] !== null) {
            $this->UpgradeAble = $param["UpgradeAble"];
        }

        if (array_key_exists("TopicRegion",$param) and $param["TopicRegion"] !== null) {
            $this->TopicRegion = $param["TopicRegion"];
        }
    }
}
