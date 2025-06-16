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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListModel request structure.
 *
 * @method string getAppType() Obtain Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
 * @method void setAppType(string $AppType) Set Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
 * @method string getPattern() Obtain Application mode standard: standard; agent; single_workflow.
 * @method void setPattern(string $Pattern) Set Application mode standard: standard; agent; single_workflow.
 * @method string getModelCategory() Obtain Model category: 
Generate: Generative model
Thought: Thinking model
 * @method void setModelCategory(string $ModelCategory) Set Model category: 
Generate: Generative model
Thought: Thinking model
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).	
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).	
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).	
 */
class ListModelRequest extends AbstractModel
{
    /**
     * @var string Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
     */
    public $AppType;

    /**
     * @var string Application mode standard: standard; agent; single_workflow.
     */
    public $Pattern;

    /**
     * @var string Model category: 
Generate: Generative model
Thought: Thinking model
     */
    public $ModelCategory;

    /**
     * @var string Login to user's root account (required in integrator mode).	
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).	
     */
    public $LoginSubAccountUin;

    /**
     * @param string $AppType Application type; knowledge_qa - knowledge Q&A management; summary - knowledge summary; classifys - knowledge label extraction.
     * @param string $Pattern Application mode standard: standard; agent; single_workflow.
     * @param string $ModelCategory Model category: 
Generate: Generative model
Thought: Thinking model
     * @param string $LoginUin Login to user's root account (required in integrator mode).	
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).	
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("ModelCategory",$param) and $param["ModelCategory"] !== null) {
            $this->ModelCategory = $param["ModelCategory"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
