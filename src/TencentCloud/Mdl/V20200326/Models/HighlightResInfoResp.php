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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Highlight results information.
 *
 * @method string getTaskId() Obtain MPS task ID.
 * @method void setTaskId(string $TaskId) Set MPS task ID.
 * @method string getSegmentUrl() Obtain Highlights video link.
 * @method void setSegmentUrl(string $SegmentUrl) Set Highlights video link.
 * @method string getCovImgUrl() Obtain Collection cover link.
 * @method void setCovImgUrl(string $CovImgUrl) Set Collection cover link.
 * @method integer getCreateTime() Obtain Generation time, UTC format.
 * @method void setCreateTime(integer $CreateTime) Set Generation time, UTC format.
 * @method float getStartTime() Obtain Starting pts.
 * @method void setStartTime(float $StartTime) Set Starting pts.
 * @method float getEndTime() Obtain End pts.
 * @method void setEndTime(float $EndTime) Set End pts.
 * @method float getDuration() Obtain Duration in seconds.
 * @method void setDuration(float $Duration) Set Duration in seconds.
 */
class HighlightResInfoResp extends AbstractModel
{
    /**
     * @var string MPS task ID.
     */
    public $TaskId;

    /**
     * @var string Highlights video link.
     */
    public $SegmentUrl;

    /**
     * @var string Collection cover link.
     */
    public $CovImgUrl;

    /**
     * @var integer Generation time, UTC format.
     */
    public $CreateTime;

    /**
     * @var float Starting pts.
     */
    public $StartTime;

    /**
     * @var float End pts.
     */
    public $EndTime;

    /**
     * @var float Duration in seconds.
     */
    public $Duration;

    /**
     * @param string $TaskId MPS task ID.
     * @param string $SegmentUrl Highlights video link.
     * @param string $CovImgUrl Collection cover link.
     * @param integer $CreateTime Generation time, UTC format.
     * @param float $StartTime Starting pts.
     * @param float $EndTime End pts.
     * @param float $Duration Duration in seconds.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SegmentUrl",$param) and $param["SegmentUrl"] !== null) {
            $this->SegmentUrl = $param["SegmentUrl"];
        }

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
