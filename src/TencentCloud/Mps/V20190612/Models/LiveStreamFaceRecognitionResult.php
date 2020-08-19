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
 * AI-based live streaming face recognition result
 *
 * @method string getId() Obtain Unique ID of figure.
 * @method void setId(string $Id) Set Unique ID of figure.
 * @method string getName() Obtain Figure name.
 * @method void setName(string $Name) Set Figure name.
 * @method string getType() Obtain Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: default figure library</li><li>UserDefine: custom figure library</li>
 * @method void setType(string $Type) Set Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: default figure library</li><li>UserDefine: custom figure library</li>
 * @method float getStartPtsTime() Obtain Start PTS time of recognized segment in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of recognized segment in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of recognized segment in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of recognized segment in seconds.
 * @method float getConfidence() Obtain Confidence of recognized segment. Value range: 0–100.
 * @method void setConfidence(float $Confidence) Set Confidence of recognized segment. Value range: 0–100.
 * @method array getAreaCoordSet() Obtain Zone coordinates of recognition result. The array contains four elements: [x1,y1,x2,y2], i.e., the horizontal and vertical coordinates of the top-left and bottom-right corners.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Zone coordinates of recognition result. The array contains four elements: [x1,y1,x2,y2], i.e., the horizontal and vertical coordinates of the top-left and bottom-right corners.
 */
class LiveStreamFaceRecognitionResult extends AbstractModel
{
    /**
     * @var string Unique ID of figure.
     */
    public $Id;

    /**
     * @var string Figure name.
     */
    public $Name;

    /**
     * @var string Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: default figure library</li><li>UserDefine: custom figure library</li>
     */
    public $Type;

    /**
     * @var float Start PTS time of recognized segment in seconds.
     */
    public $StartPtsTime;

    /**
     * @var float End PTS time of recognized segment in seconds.
     */
    public $EndPtsTime;

    /**
     * @var float Confidence of recognized segment. Value range: 0–100.
     */
    public $Confidence;

    /**
     * @var array Zone coordinates of recognition result. The array contains four elements: [x1,y1,x2,y2], i.e., the horizontal and vertical coordinates of the top-left and bottom-right corners.
     */
    public $AreaCoordSet;

    /**
     * @param string $Id Unique ID of figure.
     * @param string $Name Figure name.
     * @param string $Type Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: default figure library</li><li>UserDefine: custom figure library</li>
     * @param float $StartPtsTime Start PTS time of recognized segment in seconds.
     * @param float $EndPtsTime End PTS time of recognized segment in seconds.
     * @param float $Confidence Confidence of recognized segment. Value range: 0–100.
     * @param array $AreaCoordSet Zone coordinates of recognition result. The array contains four elements: [x1,y1,x2,y2], i.e., the horizontal and vertical coordinates of the top-left and bottom-right corners.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
