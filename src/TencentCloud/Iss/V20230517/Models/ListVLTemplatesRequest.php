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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListVLTemplates request structure.
 *
 * @method string getName() Obtain <p>Template name, exact match</p>
 * @method void setName(string $Name) Set <p>Template name, exact match</p>
 * @method string getAnalysisMode() Obtain <p>Analysis mode filter, image / video</p>
 * @method void setAnalysisMode(string $AnalysisMode) Set <p>Analysis mode filter, image / video</p>
 * @method string getCaptureType() Obtain <p>Screenshot type filter (this parameter is valid only when AnalysisMode=image): realtime/low</p>
 * @method void setCaptureType(string $CaptureType) Set <p>Screenshot type filter (this parameter is valid only when AnalysisMode=image): realtime/low</p>
 * @method integer getPageNumber() Obtain <p>Page number, which is 1 by default.</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number, which is 1 by default.</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Default value: 20. Maximum value: 200.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Default value: 20. Maximum value: 200.</p>
 */
class ListVLTemplatesRequest extends AbstractModel
{
    /**
     * @var string <p>Template name, exact match</p>
     */
    public $Name;

    /**
     * @var string <p>Analysis mode filter, image / video</p>
     */
    public $AnalysisMode;

    /**
     * @var string <p>Screenshot type filter (this parameter is valid only when AnalysisMode=image): realtime/low</p>
     */
    public $CaptureType;

    /**
     * @var integer <p>Page number, which is 1 by default.</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page. Default value: 20. Maximum value: 200.</p>
     */
    public $PageSize;

    /**
     * @param string $Name <p>Template name, exact match</p>
     * @param string $AnalysisMode <p>Analysis mode filter, image / video</p>
     * @param string $CaptureType <p>Screenshot type filter (this parameter is valid only when AnalysisMode=image): realtime/low</p>
     * @param integer $PageNumber <p>Page number, which is 1 by default.</p>
     * @param integer $PageSize <p>Number of items per page. Default value: 20. Maximum value: 200.</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("CaptureType",$param) and $param["CaptureType"] !== null) {
            $this->CaptureType = $param["CaptureType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
