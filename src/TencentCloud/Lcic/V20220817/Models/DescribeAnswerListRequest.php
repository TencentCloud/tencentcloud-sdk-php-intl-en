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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAnswerList request structure.
 *
 * @method string getQuestionId() Obtain The question ID.
 * @method void setQuestionId(string $QuestionId) Set The question ID.
 * @method integer getPage() Obtain 1
 * @method void setPage(integer $Page) Set 1
 * @method integer getLimit() Obtain 100
 * @method void setLimit(integer $Limit) Set 100
 */
class DescribeAnswerListRequest extends AbstractModel
{
    /**
     * @var string The question ID.
     */
    public $QuestionId;

    /**
     * @var integer 1
     */
    public $Page;

    /**
     * @var integer 100
     */
    public $Limit;

    /**
     * @param string $QuestionId The question ID.
     * @param integer $Page 1
     * @param integer $Limit 100
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
        if (array_key_exists("QuestionId",$param) and $param["QuestionId"] !== null) {
            $this->QuestionId = $param["QuestionId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
