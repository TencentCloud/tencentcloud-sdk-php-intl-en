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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the category label
 *
 * @method string getLabel() Obtain Values: `Teenager`, `Gender`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setLabel(string $Label) Set Values: `Teenager`, `Gender`
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getTags() Obtain List of recognized category labels
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTags(array $Tags) Set List of recognized category labels
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class RecognitionResult extends AbstractModel
{
    /**
     * @var string Values: `Teenager`, `Gender`
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Label;

    /**
     * @var array List of recognized category labels
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Tags;

    /**
     * @param string $Label Values: `Teenager`, `Gender`
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $Tags List of recognized category labels
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
