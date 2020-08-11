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
 * 
 *
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method float getScore() Obtain 
 * @method void setScore(float $Score) Set 
 * @method array getDefaultLibraryLabelSet() Obtain 
 * @method void setDefaultLibraryLabelSet(array $DefaultLibraryLabelSet) Set 
 * @method array getUserDefineLibraryLabelSet() Obtain 
 * @method void setUserDefineLibraryLabelSet(array $UserDefineLibraryLabelSet) Set 
 * @method string getFaceLibrary() Obtain 
 * @method void setFaceLibrary(string $FaceLibrary) Set 
 */
class FaceConfigureInfoForUpdate extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var float 
     */
    public $Score;

    /**
     * @var array 
     */
    public $DefaultLibraryLabelSet;

    /**
     * @var array 
     */
    public $UserDefineLibraryLabelSet;

    /**
     * @var string 
     */
    public $FaceLibrary;

    /**
     * @param string $Switch 
     * @param float $Score 
     * @param array $DefaultLibraryLabelSet 
     * @param array $UserDefineLibraryLabelSet 
     * @param string $FaceLibrary 
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
