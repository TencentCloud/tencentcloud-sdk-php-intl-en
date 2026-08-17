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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Face Recognition Task Control Parameter
 *
 * @method string getSwitch() Obtain Face Recognition task switch. Valid values:
<li>ON: Enable intelligent face recognition task.</li>
<li>OFF: Disables the intelligent face recognition task.</li>
 * @method void setSwitch(string $Switch) Set Face Recognition task switch. Valid values:
<li>ON: Enable intelligent face recognition task.</li>
<li>OFF: Disables the intelligent face recognition task.</li>
 * @method float getScore() Obtain Face recognition filter score. Returns the recognition result when the recognition result reaches this score or higher. Value ranges from 0 to 100.
 * @method void setScore(float $Score) Set Face recognition filter score. Returns the recognition result when the recognition result reaches this score or higher. Value ranges from 0 to 100.
 * @method array getDefaultLibraryLabelSet() Obtain Default character filter tag. Specify the tag of the default character to be returned. If left blank or empty, all default character results will be returned. Tag value range:
<li>entertainment: entertainment star;</li>
<li>Sport: sports celebrity;</li>
<li>politician: sensitive person.</li>
 * @method void setDefaultLibraryLabelSet(array $DefaultLibraryLabelSet) Set Default character filter tag. Specify the tag of the default character to be returned. If left blank or empty, all default character results will be returned. Tag value range:
<li>entertainment: entertainment star;</li>
<li>Sport: sports celebrity;</li>
<li>politician: sensitive person.</li>
 * @method array getUserDefineLibraryLabelSet() Obtain User-defined character filter tag. Specify the tag of the user-defined character to return. If left blank or empty, all custom character results are returned.
The number of tags is up to 100, and each tag can have up to 16 characters.
 * @method void setUserDefineLibraryLabelSet(array $UserDefineLibraryLabelSet) Set User-defined character filter tag. Specify the tag of the user-defined character to return. If left blank or empty, all custom character results are returned.
The number of tags is up to 100, and each tag can have up to 16 characters.
 * @method string getFaceLibrary() Obtain Figure library selection. Available values:
<li>Default: Use default character library;</li>
<li>UserDefine: Use the user-defined character library.</li>
<li>All: Use default character library and user-defined character library simultaneously.</li>
 * @method void setFaceLibrary(string $FaceLibrary) Set Figure library selection. Available values:
<li>Default: Use default character library;</li>
<li>UserDefine: Use the user-defined character library.</li>
<li>All: Use default character library and user-defined character library simultaneously.</li>
 */
class FaceConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string Face Recognition task switch. Valid values:
<li>ON: Enable intelligent face recognition task.</li>
<li>OFF: Disables the intelligent face recognition task.</li>
     */
    public $Switch;

    /**
     * @var float Face recognition filter score. Returns the recognition result when the recognition result reaches this score or higher. Value ranges from 0 to 100.
     */
    public $Score;

    /**
     * @var array Default character filter tag. Specify the tag of the default character to be returned. If left blank or empty, all default character results will be returned. Tag value range:
<li>entertainment: entertainment star;</li>
<li>Sport: sports celebrity;</li>
<li>politician: sensitive person.</li>
     */
    public $DefaultLibraryLabelSet;

    /**
     * @var array User-defined character filter tag. Specify the tag of the user-defined character to return. If left blank or empty, all custom character results are returned.
The number of tags is up to 100, and each tag can have up to 16 characters.
     */
    public $UserDefineLibraryLabelSet;

    /**
     * @var string Figure library selection. Available values:
<li>Default: Use default character library;</li>
<li>UserDefine: Use the user-defined character library.</li>
<li>All: Use default character library and user-defined character library simultaneously.</li>
     */
    public $FaceLibrary;

    /**
     * @param string $Switch Face Recognition task switch. Valid values:
<li>ON: Enable intelligent face recognition task.</li>
<li>OFF: Disables the intelligent face recognition task.</li>
     * @param float $Score Face recognition filter score. Returns the recognition result when the recognition result reaches this score or higher. Value ranges from 0 to 100.
     * @param array $DefaultLibraryLabelSet Default character filter tag. Specify the tag of the default character to be returned. If left blank or empty, all default character results will be returned. Tag value range:
<li>entertainment: entertainment star;</li>
<li>Sport: sports celebrity;</li>
<li>politician: sensitive person.</li>
     * @param array $UserDefineLibraryLabelSet User-defined character filter tag. Specify the tag of the user-defined character to return. If left blank or empty, all custom character results are returned.
The number of tags is up to 100, and each tag can have up to 16 characters.
     * @param string $FaceLibrary Figure library selection. Available values:
<li>Default: Use default character library;</li>
<li>UserDefine: Use the user-defined character library.</li>
<li>All: Use default character library and user-defined character library simultaneously.</li>
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
