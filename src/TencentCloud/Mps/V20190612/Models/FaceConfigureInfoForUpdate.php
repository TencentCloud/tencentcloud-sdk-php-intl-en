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
 * @method string getSwitch() Obtain Switch of a face recognition task. Valid values:
<li>ON: Enables an intelligent face recognition task;</li>
<li>OFF: Disables an intelligent face recognition task.</li>
 * @method void setSwitch(string $Switch) Set Switch of a face recognition task. Valid values:
<li>ON: Enables an intelligent face recognition task;</li>
<li>OFF: Disables an intelligent face recognition task.</li>
 * @method float getScore() Obtain Face recognition filter score. If this score is reached or exceeded, a recognition result will be returned. Value range: 0–100.
 * @method void setScore(float $Score) Set Face recognition filter score. If this score is reached or exceeded, a recognition result will be returned. Value range: 0–100.
 * @method array getDefaultLibraryLabelSet() Obtain Default figure filter tag, which specifies the default figure tag that needs to be returned. If this parameter is left empty or an empty value is entered, all results of the default figures will be returned. Valid values:
<li>entertainment: Entertainment celebrity;</li>
<li>sport: Sports celebrity;</li>
<li>politician: Politically sensitive figure.</li>
 * @method void setDefaultLibraryLabelSet(array $DefaultLibraryLabelSet) Set Default figure filter tag, which specifies the default figure tag that needs to be returned. If this parameter is left empty or an empty value is entered, all results of the default figures will be returned. Valid values:
<li>entertainment: Entertainment celebrity;</li>
<li>sport: Sports celebrity;</li>
<li>politician: Politically sensitive figure.</li>
 * @method array getUserDefineLibraryLabelSet() Obtain Custom figure filter tag, which specifies the custom figure tag that needs to be returned. If this parameter is left empty or an empty value is entered, all results of the custom figures will be returned. Valid values:
There can be up to 10 tags, each with a length limit of 16 characters.
 * @method void setUserDefineLibraryLabelSet(array $UserDefineLibraryLabelSet) Set Custom figure filter tag, which specifies the custom figure tag that needs to be returned. If this parameter is left empty or an empty value is entered, all results of the custom figures will be returned. Valid values:
There can be up to 10 tags, each with a length limit of 16 characters.
 * @method string getFaceLibrary() Obtain Figure library. Valid values:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
<li>All: Both default and custom figure libraries will be used.</li>
 * @method void setFaceLibrary(string $FaceLibrary) Set Figure library. Valid values:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
<li>All: Both default and custom figure libraries will be used.</li>
 */

/**
 *Control parameter of a face recognition task
 */
class FaceConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Switch of a face recognition task. Valid values:
<li>ON: Enables an intelligent face recognition task;</li>
<li>OFF: Disables an intelligent face recognition task.</li>
     */
    public $Switch;

    /**
     * @var float Face recognition filter score. If this score is reached or exceeded, a recognition result will be returned. Value range: 0–100.
     */
    public $Score;

    /**
     * @var array Default figure filter tag, which specifies the default figure tag that needs to be returned. If this parameter is left empty or an empty value is entered, all results of the default figures will be returned. Valid values:
<li>entertainment: Entertainment celebrity;</li>
<li>sport: Sports celebrity;</li>
<li>politician: Politically sensitive figure.</li>
     */
    public $DefaultLibraryLabelSet;

    /**
     * @var array Custom figure filter tag, which specifies the custom figure tag that needs to be returned. If this parameter is left empty or an empty value is entered, all results of the custom figures will be returned. Valid values:
There can be up to 10 tags, each with a length limit of 16 characters.
     */
    public $UserDefineLibraryLabelSet;

    /**
     * @var string Figure library. Valid values:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
<li>All: Both default and custom figure libraries will be used.</li>
     */
    public $FaceLibrary;
    /**
     * @param string $Switch Switch of a face recognition task. Valid values:
<li>ON: Enables an intelligent face recognition task;</li>
<li>OFF: Disables an intelligent face recognition task.</li>
     * @param float $Score Face recognition filter score. If this score is reached or exceeded, a recognition result will be returned. Value range: 0–100.
     * @param array $DefaultLibraryLabelSet Default figure filter tag, which specifies the default figure tag that needs to be returned. If this parameter is left empty or an empty value is entered, all results of the default figures will be returned. Valid values:
<li>entertainment: Entertainment celebrity;</li>
<li>sport: Sports celebrity;</li>
<li>politician: Politically sensitive figure.</li>
     * @param array $UserDefineLibraryLabelSet Custom figure filter tag, which specifies the custom figure tag that needs to be returned. If this parameter is left empty or an empty value is entered, all results of the custom figures will be returned. Valid values:
There can be up to 10 tags, each with a length limit of 16 characters.
     * @param string $FaceLibrary Figure library. Valid values:
<li>Default: Default figure library;</li>
<li>UserDefine: Custom figure library.</li>
<li>All: Both default and custom figure libraries will be used.</li>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("DefaultLibraryLabelSet",$param) and $param["DefaultLibraryLabelSet"] !== null) {
            $this->DefaultLibraryLabelSet = $param["DefaultLibraryLabelSet"];
        }

        if (array_key_exists("UserDefineLibraryLabelSet",$param) and $param["UserDefineLibraryLabelSet"] !== null) {
            $this->UserDefineLibraryLabelSet = $param["UserDefineLibraryLabelSet"];
        }

        if (array_key_exists("FaceLibrary",$param) and $param["FaceLibrary"] !== null) {
            $this->FaceLibrary = $param["FaceLibrary"];
        }
    }
}
