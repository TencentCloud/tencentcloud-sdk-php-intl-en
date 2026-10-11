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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional flow information.
 *
 * @method string getTitle() Obtain Title of additional information.
 * @method void setTitle(string $Title) Set Title of additional information.
 * @method array getDetail() Obtain Additional information.
 * @method void setDetail(array $Detail) Set Additional information.
 */
class FlowExtraDetail extends AbstractModel
{
    /**
     * @var string Title of additional information.
     */
    public $Title;

    /**
     * @var array Additional information.
     */
    public $Detail;

    /**
     * @param string $Title Title of additional information.
     * @param array $Detail Additional information.
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new FlowParamsDesc();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }
    }
}
