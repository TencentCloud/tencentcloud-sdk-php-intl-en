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
 * Control parameters of the face recognition task
 *
 * @method string getSwitch() Obtain <p>Face recognition task switch. Available values:</p><li>ON: Enable the intelligent face recognition task;</li><li>OFF: Disable the intelligent face recognition task.</li>
 * @method void setSwitch(string $Switch) Set <p>Face recognition task switch. Available values:</p><li>ON: Enable the intelligent face recognition task;</li><li>OFF: Disable the intelligent face recognition task.</li>
 * @method float getScore() Obtain <p>Face recognition filter score. When the recognition result reaches this score or above, the recognition result is returned. Value ranges from 0 to 100.</p>
 * @method void setScore(float $Score) Set <p>Face recognition filter score. When the recognition result reaches this score or above, the recognition result is returned. Value ranges from 0 to 100.</p>
 * @method array getDefaultLibraryLabelSet() Obtain <p>Default character filter tag, specify the tag of the default character to return. If not filled or empty, all default character results will be returned. Available tag values:</p><li>entertainment: entertainment star;</li><li>sport: sports celebrity;</li><li>politician: relevant people.</li>
 * @method void setDefaultLibraryLabelSet(array $DefaultLibraryLabelSet) Set <p>Default character filter tag, specify the tag of the default character to return. If not filled or empty, all default character results will be returned. Available tag values:</p><li>entertainment: entertainment star;</li><li>sport: sports celebrity;</li><li>politician: relevant people.</li>
 * @method array getUserDefineLibraryLabelSet() Obtain <p>User-defined character filter tags. Specify the tags of user-defined characters to return. If not specified or empty, all customized figure results are returned.<br>Up to 100 tags, each up to 16 characters in length.</p>
 * @method void setUserDefineLibraryLabelSet(array $UserDefineLibraryLabelSet) Set <p>User-defined character filter tags. Specify the tags of user-defined characters to return. If not specified or empty, all customized figure results are returned.<br>Up to 100 tags, each up to 16 characters in length.</p>
 * @method string getFaceLibrary() Obtain <p>Character library selection. Available values:</p><li>Default: use the default character library;</li><li>UserDefine: use a user-defined character library.</li><li>All: use both the default and user-defined character libraries.</li>
 * @method void setFaceLibrary(string $FaceLibrary) Set <p>Character library selection. Available values:</p><li>Default: use the default character library;</li><li>UserDefine: use a user-defined character library.</li><li>All: use both the default and user-defined character libraries.</li>
 */
class FaceConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string <p>Face recognition task switch. Available values:</p><li>ON: Enable the intelligent face recognition task;</li><li>OFF: Disable the intelligent face recognition task.</li>
     */
    public $Switch;

    /**
     * @var float <p>Face recognition filter score. When the recognition result reaches this score or above, the recognition result is returned. Value ranges from 0 to 100.</p>
     */
    public $Score;

    /**
     * @var array <p>Default character filter tag, specify the tag of the default character to return. If not filled or empty, all default character results will be returned. Available tag values:</p><li>entertainment: entertainment star;</li><li>sport: sports celebrity;</li><li>politician: relevant people.</li>
     */
    public $DefaultLibraryLabelSet;

    /**
     * @var array <p>User-defined character filter tags. Specify the tags of user-defined characters to return. If not specified or empty, all customized figure results are returned.<br>Up to 100 tags, each up to 16 characters in length.</p>
     */
    public $UserDefineLibraryLabelSet;

    /**
     * @var string <p>Character library selection. Available values:</p><li>Default: use the default character library;</li><li>UserDefine: use a user-defined character library.</li><li>All: use both the default and user-defined character libraries.</li>
     */
    public $FaceLibrary;

    /**
     * @param string $Switch <p>Face recognition task switch. Available values:</p><li>ON: Enable the intelligent face recognition task;</li><li>OFF: Disable the intelligent face recognition task.</li>
     * @param float $Score <p>Face recognition filter score. When the recognition result reaches this score or above, the recognition result is returned. Value ranges from 0 to 100.</p>
     * @param array $DefaultLibraryLabelSet <p>Default character filter tag, specify the tag of the default character to return. If not filled or empty, all default character results will be returned. Available tag values:</p><li>entertainment: entertainment star;</li><li>sport: sports celebrity;</li><li>politician: relevant people.</li>
     * @param array $UserDefineLibraryLabelSet <p>User-defined character filter tags. Specify the tags of user-defined characters to return. If not specified or empty, all customized figure results are returned.<br>Up to 100 tags, each up to 16 characters in length.</p>
     * @param string $FaceLibrary <p>Character library selection. Available values:</p><li>Default: use the default character library;</li><li>UserDefine: use a user-defined character library.</li><li>All: use both the default and user-defined character libraries.</li>
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
