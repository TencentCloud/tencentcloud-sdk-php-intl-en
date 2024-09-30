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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Live streaming AI object recognition result.
 *
 * @method string getName() Obtain Name of a recognized object.
 * @method void setName(string $Name) Set Name of a recognized object.
 * @method float getStartPtsOffset() Obtain Start PTS time of a recognized segment, in seconds.
 * @method void setStartPtsOffset(float $StartPtsOffset) Set Start PTS time of a recognized segment, in seconds.
 * @method float getEndPtsOffset() Obtain End PTS time of a recognized segment, in seconds.
 * @method void setEndPtsOffset(float $EndPtsOffset) Set End PTS time of a recognized segment, in seconds.
 * @method float getConfidence() Obtain Confidence of a recognized segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of a recognized segment. Value range: 0-100.
 * @method array getAreaCoordSet() Obtain Zone coordinates of the recognition result. An array contains four elements: [x1, y1, x2, y2], representing the horizontal and vertical coordinates of the top-left and bottom-right corners, respectively.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Zone coordinates of the recognition result. An array contains four elements: [x1, y1, x2, y2], representing the horizontal and vertical coordinates of the top-left and bottom-right corners, respectively.
 * @method string getUrl() Obtain Screenshot link.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Screenshot link.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveStreamObjectRecognitionResult extends AbstractModel
{
    /**
     * @var string Name of a recognized object.
     */
    public $Name;

    /**
     * @var float Start PTS time of a recognized segment, in seconds.
     */
    public $StartPtsOffset;

    /**
     * @var float End PTS time of a recognized segment, in seconds.
     */
    public $EndPtsOffset;

    /**
     * @var float Confidence of a recognized segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var array Zone coordinates of the recognition result. An array contains four elements: [x1, y1, x2, y2], representing the horizontal and vertical coordinates of the top-left and bottom-right corners, respectively.
     */
    public $AreaCoordSet;

    /**
     * @var string Screenshot link.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @param string $Name Name of a recognized object.
     * @param float $StartPtsOffset Start PTS time of a recognized segment, in seconds.
     * @param float $EndPtsOffset End PTS time of a recognized segment, in seconds.
     * @param float $Confidence Confidence of a recognized segment. Value range: 0-100.
     * @param array $AreaCoordSet Zone coordinates of the recognition result. An array contains four elements: [x1, y1, x2, y2], representing the horizontal and vertical coordinates of the top-left and bottom-right corners, respectively.
     * @param string $Url Screenshot link.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartPtsOffset",$param) and $param["StartPtsOffset"] !== null) {
            $this->StartPtsOffset = $param["StartPtsOffset"];
        }

        if (array_key_exists("EndPtsOffset",$param) and $param["EndPtsOffset"] !== null) {
            $this->EndPtsOffset = $param["EndPtsOffset"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
