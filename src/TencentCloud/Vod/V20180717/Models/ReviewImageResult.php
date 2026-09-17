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
 * 
 *
 * @method string getSuggestion() Obtain 
 * @method void setSuggestion(string $Suggestion) Set 
 * @method string getLabel() Obtain 
 * @method void setLabel(string $Label) Set 
 * @method string getForm() Obtain 
 * @method void setForm(string $Form) Set 
 * @method array getSegmentSet() Obtain 
 * @method void setSegmentSet(array $SegmentSet) Set 
 * @method string getSegmentSetFileUrl() Obtain 
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set 
 * @method string getSegmentSetFileUrlExpireTime() Obtain 
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set 
 */
class ReviewImageResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Suggestion;

    /**
     * @var string 
     */
    public $Label;

    /**
     * @var string 
     */
    public $Form;

    /**
     * @var array 
     */
    public $SegmentSet;

    /**
     * @var string 
     */
    public $SegmentSetFileUrl;

    /**
     * @var string 
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param string $Suggestion 
     * @param string $Label 
     * @param string $Form 
     * @param array $SegmentSet 
     * @param string $SegmentSetFileUrl 
     * @param string $SegmentSetFileUrlExpireTime 
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
        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Form",$param) and $param["Form"] !== null) {
            $this->Form = $param["Form"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new ReviewImageSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SegmentSetFileUrl",$param) and $param["SegmentSetFileUrl"] !== null) {
            $this->SegmentSetFileUrl = $param["SegmentSetFileUrl"];
        }

        if (array_key_exists("SegmentSetFileUrlExpireTime",$param) and $param["SegmentSetFileUrlExpireTime"] !== null) {
            $this->SegmentSetFileUrlExpireTime = $param["SegmentSetFileUrlExpireTime"];
        }
    }
}
