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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Face recognition result
 *
 * @method string getId() Obtain Unique ID of figure.
 * @method void setId(string $Id) Set Unique ID of figure.
 * @method string getType() Obtain Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: default figure library;</li>
<li>UserDefine: custom figure library.</li>
 * @method void setType(string $Type) Set Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: default figure library;</li>
<li>UserDefine: custom figure library.</li>
 * @method string getName() Obtain Figure name.
 * @method void setName(string $Name) Set Figure name.
 * @method array getSegmentSet() Obtain Result set of segments that contain a figure.
 * @method void setSegmentSet(array $SegmentSet) Set Result set of segments that contain a figure.
 */
class AiRecognitionTaskFaceResultItem extends AbstractModel
{
    /**
     * @var string Unique ID of figure.
     */
    public $Id;

    /**
     * @var string Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: default figure library;</li>
<li>UserDefine: custom figure library.</li>
     */
    public $Type;

    /**
     * @var string Figure name.
     */
    public $Name;

    /**
     * @var array Result set of segments that contain a figure.
     */
    public $SegmentSet;

    /**
     * @param string $Id Unique ID of figure.
     * @param string $Type Figure library type, indicating to which figure library the recognized figure belongs:
<li>Default: default figure library;</li>
<li>UserDefine: custom figure library.</li>
     * @param string $Name Figure name.
     * @param array $SegmentSet Result set of segments that contain a figure.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new AiRecognitionTaskFaceSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
