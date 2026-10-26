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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Screenshot template information
 *
 * @method string getTemplateId() Obtain <p>Screenshot template Id</p>
 * @method void setTemplateId(string $TemplateId) Set <p>Screenshot template Id</p>
 * @method string getName() Obtain <p>Screenshot template name</p>
 * @method void setName(string $Name) Set <p>Screenshot template name</p>
 * @method integer getType() Obtain <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method void setType(integer $Type) Set <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method integer getInterval() Obtain <p>Frame capturing frequency</p>
 * @method void setInterval(integer $Interval) Set <p>Frame capturing frequency</p>
 * @method MultiVideoSnapshotMode getMultiMode() Obtain <p>Multiple mode</p>
 * @method void setMultiMode(MultiVideoSnapshotMode $MultiMode) Set <p>Multiple mode</p>
 * @method array getTimes() Obtain <p>Effective period</p>
 * @method void setTimes(array $Times) Set <p>Effective period</p>
 * @method integer getRelatedConfigCount() Obtain <p>Number of configurations associated with the template</p>
 * @method void setRelatedConfigCount(integer $RelatedConfigCount) Set <p>Number of configurations associated with the template</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Last update time</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Last update time</p>
 */
class VideoSnapshotTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>Screenshot template Id</p>
     */
    public $TemplateId;

    /**
     * @var string <p>Screenshot template name</p>
     */
    public $Name;

    /**
     * @var integer <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>Frame capturing frequency</p>
     */
    public $Interval;

    /**
     * @var MultiVideoSnapshotMode <p>Multiple mode</p>
     */
    public $MultiMode;

    /**
     * @var array <p>Effective period</p>
     */
    public $Times;

    /**
     * @var integer <p>Number of configurations associated with the template</p>
     */
    public $RelatedConfigCount;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last update time</p>
     */
    public $UpdateTime;

    /**
     * @param string $TemplateId <p>Screenshot template Id</p>
     * @param string $Name <p>Screenshot template name</p>
     * @param integer $Type <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     * @param integer $Interval <p>Frame capturing frequency</p>
     * @param MultiVideoSnapshotMode $MultiMode <p>Multiple mode</p>
     * @param array $Times <p>Effective period</p>
     * @param integer $RelatedConfigCount <p>Number of configurations associated with the template</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Last update time</p>
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MultiMode",$param) and $param["MultiMode"] !== null) {
            $this->MultiMode = new MultiVideoSnapshotMode();
            $this->MultiMode->deserialize($param["MultiMode"]);
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new EffectiveTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("RelatedConfigCount",$param) and $param["RelatedConfigCount"] !== null) {
            $this->RelatedConfigCount = $param["RelatedConfigCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
