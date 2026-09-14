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
 * 
 *
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method RawSmartEraseParameter getRawParameter() Obtain 
 * @method void setRawParameter(RawSmartEraseParameter $RawParameter) Set 
 * @method OverrideEraseParameter getOverrideParameter() Obtain 
 * @method void setOverrideParameter(OverrideEraseParameter $OverrideParameter) Set 
 * @method TaskOutputStorage getOutputStorage() Obtain 
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set 
 * @method string getOutputObjectPath() Obtain 
 * @method void setOutputObjectPath(string $OutputObjectPath) Set 
 */
class SmartEraseTaskInput extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var RawSmartEraseParameter 
     */
    public $RawParameter;

    /**
     * @var OverrideEraseParameter 
     */
    public $OverrideParameter;

    /**
     * @var TaskOutputStorage 
     */
    public $OutputStorage;

    /**
     * @var string 
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition 
     * @param RawSmartEraseParameter $RawParameter 
     * @param OverrideEraseParameter $OverrideParameter 
     * @param TaskOutputStorage $OutputStorage 
     * @param string $OutputObjectPath 
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawSmartEraseParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new OverrideEraseParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }
    }
}
