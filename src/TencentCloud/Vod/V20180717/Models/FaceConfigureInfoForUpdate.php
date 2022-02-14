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
 * Control parameter of face recognition task
 *
 * @method string getSwitch() Obtain Switch of face recognition task. Valid values:
<li>ON: enables intelligent face recognition task;</li>
<li>OFF: disables intelligent face recognition task.</li>
 * @method void setSwitch(string $Switch) Set Switch of face recognition task. Valid values:
<li>ON: enables intelligent face recognition task;</li>
<li>OFF: disables intelligent face recognition task.</li>
 * @method float getScore() Obtain Face recognition filter score. If this score is reached or exceeded, a recognition result will be returned. Value range: 0–100.
 * @method void setScore(float $Score) Set Face recognition filter score. If this score is reached or exceeded, a recognition result will be returned. Value range: 0–100.
 * @method array getDefaultLibraryLabelSet() Obtain Default face filter labels, which specify the types of faces to return. If this parameter is left empty or an empty value is entered, the recognition results for all labels are returned. Valid values:
<li>`entertainment`: people in the entertainment industry</li>
<li>`sport`: sports celebrities</li>
<li>`politician`: politically sensitive people</li>
 * @method void setDefaultLibraryLabelSet(array $DefaultLibraryLabelSet) Set Default face filter labels, which specify the types of faces to return. If this parameter is left empty or an empty value is entered, the recognition results for all labels are returned. Valid values:
<li>`entertainment`: people in the entertainment industry</li>
<li>`sport`: sports celebrities</li>
<li>`politician`: politically sensitive people</li>
 * @method array getUserDefineLibraryLabelSet() Obtain Custom face labels for filtering. After you specify a label, callbacks of face images without this label will be returned. If this parameter is not specified or left empty, callbacks of all face images will be returned.
You can specify up to 100 labels, with each containing up to 16 characters.
 * @method void setUserDefineLibraryLabelSet(array $UserDefineLibraryLabelSet) Set Custom face labels for filtering. After you specify a label, callbacks of face images without this label will be returned. If this parameter is not specified or left empty, callbacks of all face images will be returned.
You can specify up to 100 labels, with each containing up to 16 characters.
 * @method string getFaceLibrary() Obtain Figure library. Valid values:
<li>Default: default figure library;</li>
<li>UserDefine: custom figure library.</li>
<li>All: both default and custom figure libraries will be used.</li>
 * @method void setFaceLibrary(string $FaceLibrary) Set Figure library. Valid values:
<li>Default: default figure library;</li>
<li>UserDefine: custom figure library.</li>
<li>All: both default and custom figure libraries will be used.</li>
 */
class FaceConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Switch of face recognition task. Valid values:
<li>ON: enables intelligent face recognition task;</li>
<li>OFF: disables intelligent face recognition task.</li>
     */
    public $Switch;

    /**
     * @var float Face recognition filter score. If this score is reached or exceeded, a recognition result will be returned. Value range: 0–100.
     */
    public $Score;

    /**
     * @var array Default face filter labels, which specify the types of faces to return. If this parameter is left empty or an empty value is entered, the recognition results for all labels are returned. Valid values:
<li>`entertainment`: people in the entertainment industry</li>
<li>`sport`: sports celebrities</li>
<li>`politician`: politically sensitive people</li>
     */
    public $DefaultLibraryLabelSet;

    /**
     * @var array Custom face labels for filtering. After you specify a label, callbacks of face images without this label will be returned. If this parameter is not specified or left empty, callbacks of all face images will be returned.
You can specify up to 100 labels, with each containing up to 16 characters.
     */
    public $UserDefineLibraryLabelSet;

    /**
     * @var string Figure library. Valid values:
<li>Default: default figure library;</li>
<li>UserDefine: custom figure library.</li>
<li>All: both default and custom figure libraries will be used.</li>
     */
    public $FaceLibrary;

    /**
     * @param string $Switch Switch of face recognition task. Valid values:
<li>ON: enables intelligent face recognition task;</li>
<li>OFF: disables intelligent face recognition task.</li>
     * @param float $Score Face recognition filter score. If this score is reached or exceeded, a recognition result will be returned. Value range: 0–100.
     * @param array $DefaultLibraryLabelSet Default face filter labels, which specify the types of faces to return. If this parameter is left empty or an empty value is entered, the recognition results for all labels are returned. Valid values:
<li>`entertainment`: people in the entertainment industry</li>
<li>`sport`: sports celebrities</li>
<li>`politician`: politically sensitive people</li>
     * @param array $UserDefineLibraryLabelSet Custom face labels for filtering. After you specify a label, callbacks of face images without this label will be returned. If this parameter is not specified or left empty, callbacks of all face images will be returned.
You can specify up to 100 labels, with each containing up to 16 characters.
     * @param string $FaceLibrary Figure library. Valid values:
<li>Default: default figure library;</li>
<li>UserDefine: custom figure library.</li>
<li>All: both default and custom figure libraries will be used.</li>
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
