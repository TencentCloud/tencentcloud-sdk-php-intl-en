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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Large model parses face identification configuration
 *
 * @method string getSwitch() Obtain <p>Face recognition task switch</p><p>Enumeration value:</p><ul><li>ON: Enable intelligent face recognition task</li><li>OFF: Disable intelligent face recognition task</li></ul><p>Default value: OFF</p>
 * @method void setSwitch(string $Switch) Set <p>Face recognition task switch</p><p>Enumeration value:</p><ul><li>ON: Enable intelligent face recognition task</li><li>OFF: Disable intelligent face recognition task</li></ul><p>Default value: OFF</p>
 * @method float getScore() Obtain <p>Face recognition filter score. The recognition result is returned when it reaches or exceeds this score.</p><p>Value ranges from 0 to 100.</p>
 * @method void setScore(float $Score) Set <p>Face recognition filter score. The recognition result is returned when it reaches or exceeds this score.</p><p>Value ranges from 0 to 100.</p>
 * @method array getDefaultLibraryLabelSet() Obtain <p>Default character filter tag. Specifies the tag of the default character to return. If left blank or empty, all default character results are returned.</p><p>Enumeration value:</p><ul><li>entertainment: entertainment star</li><li>sport: sports celebrity</li><li>politician: political figure</li></ul>
 * @method void setDefaultLibraryLabelSet(array $DefaultLibraryLabelSet) Set <p>Default character filter tag. Specifies the tag of the default character to return. If left blank or empty, all default character results are returned.</p><p>Enumeration value:</p><ul><li>entertainment: entertainment star</li><li>sport: sports celebrity</li><li>politician: political figure</li></ul>
 * @method array getUserDefineLibraryLabelSet() Obtain <p>User-defined character filter tag specifies the tags of user-defined characters to return. If left blank or empty, all customized figure results are returned.</p><p>Input limit: The number of tags is limited to 100, and each tag is limited to 16 characters in length.</p>
 * @method void setUserDefineLibraryLabelSet(array $UserDefineLibraryLabelSet) Set <p>User-defined character filter tag specifies the tags of user-defined characters to return. If left blank or empty, all customized figure results are returned.</p><p>Input limit: The number of tags is limited to 100, and each tag is limited to 16 characters in length.</p>
 * @method string getFaceLibrary() Obtain <p>Figure library selection</p><p>Enumeration value:</p><ul><li>Default: Use default figure library</li><li>UserDefine: Use user-defined figure library</li><li>All: Use default and user-defined figure libraries simultaneously</li></ul><p>Default value: All</p>
 * @method void setFaceLibrary(string $FaceLibrary) Set <p>Figure library selection</p><p>Enumeration value:</p><ul><li>Default: Use default figure library</li><li>UserDefine: Use user-defined figure library</li><li>All: Use default and user-defined figure libraries simultaneously</li></ul><p>Default value: All</p>
 */
class LLMComprehendFaceRecognitionForUpdate extends AbstractModel
{
    /**
     * @var string <p>Face recognition task switch</p><p>Enumeration value:</p><ul><li>ON: Enable intelligent face recognition task</li><li>OFF: Disable intelligent face recognition task</li></ul><p>Default value: OFF</p>
     */
    public $Switch;

    /**
     * @var float <p>Face recognition filter score. The recognition result is returned when it reaches or exceeds this score.</p><p>Value ranges from 0 to 100.</p>
     */
    public $Score;

    /**
     * @var array <p>Default character filter tag. Specifies the tag of the default character to return. If left blank or empty, all default character results are returned.</p><p>Enumeration value:</p><ul><li>entertainment: entertainment star</li><li>sport: sports celebrity</li><li>politician: political figure</li></ul>
     */
    public $DefaultLibraryLabelSet;

    /**
     * @var array <p>User-defined character filter tag specifies the tags of user-defined characters to return. If left blank or empty, all customized figure results are returned.</p><p>Input limit: The number of tags is limited to 100, and each tag is limited to 16 characters in length.</p>
     */
    public $UserDefineLibraryLabelSet;

    /**
     * @var string <p>Figure library selection</p><p>Enumeration value:</p><ul><li>Default: Use default figure library</li><li>UserDefine: Use user-defined figure library</li><li>All: Use default and user-defined figure libraries simultaneously</li></ul><p>Default value: All</p>
     */
    public $FaceLibrary;

    /**
     * @param string $Switch <p>Face recognition task switch</p><p>Enumeration value:</p><ul><li>ON: Enable intelligent face recognition task</li><li>OFF: Disable intelligent face recognition task</li></ul><p>Default value: OFF</p>
     * @param float $Score <p>Face recognition filter score. The recognition result is returned when it reaches or exceeds this score.</p><p>Value ranges from 0 to 100.</p>
     * @param array $DefaultLibraryLabelSet <p>Default character filter tag. Specifies the tag of the default character to return. If left blank or empty, all default character results are returned.</p><p>Enumeration value:</p><ul><li>entertainment: entertainment star</li><li>sport: sports celebrity</li><li>politician: political figure</li></ul>
     * @param array $UserDefineLibraryLabelSet <p>User-defined character filter tag specifies the tags of user-defined characters to return. If left blank or empty, all customized figure results are returned.</p><p>Input limit: The number of tags is limited to 100, and each tag is limited to 16 characters in length.</p>
     * @param string $FaceLibrary <p>Figure library selection</p><p>Enumeration value:</p><ul><li>Default: Use default figure library</li><li>UserDefine: Use user-defined figure library</li><li>All: Use default and user-defined figure libraries simultaneously</li></ul><p>Default value: All</p>
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
