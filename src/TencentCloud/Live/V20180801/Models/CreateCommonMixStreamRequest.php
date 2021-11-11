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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCommonMixStream request structure.
 *
 * @method string getMixStreamSessionId() Obtain ID of a stream mix session (from applying for the stream mix to cancelling it). This parameter can contain up to 80 bytes of letters, digits, and underscores.
 * @method void setMixStreamSessionId(string $MixStreamSessionId) Set ID of a stream mix session (from applying for the stream mix to cancelling it). This parameter can contain up to 80 bytes of letters, digits, and underscores.
 * @method array getInputStreamList() Obtain Input stream list for stream mix.
 * @method void setInputStreamList(array $InputStreamList) Set Input stream list for stream mix.
 * @method CommonMixOutputParams getOutputParams() Obtain Output stream parameter for stream mix.
 * @method void setOutputParams(CommonMixOutputParams $OutputParams) Set Output stream parameter for stream mix.
 * @method integer getMixStreamTemplateId() Obtain Input template ID. If this parameter is set, the output will be generated according to the default template layout, and there is no need to enter the custom position parameters.
If this parameter is left empty, 0 will be used by default.
For two input sources, 10, 20, 30, 40, and 50 are supported.
For three input sources, 310, 390, and 391 are supported.
For four input sources, 410 is supported.
For five input sources, 510 and 590 are supported.
For six input sources, 610 is supported.
 * @method void setMixStreamTemplateId(integer $MixStreamTemplateId) Set Input template ID. If this parameter is set, the output will be generated according to the default template layout, and there is no need to enter the custom position parameters.
If this parameter is left empty, 0 will be used by default.
For two input sources, 10, 20, 30, 40, and 50 are supported.
For three input sources, 310, 390, and 391 are supported.
For four input sources, 410 is supported.
For five input sources, 510 and 590 are supported.
For six input sources, 610 is supported.
 * @method CommonMixControlParams getControlParams() Obtain Special control parameter for stream mix. If there are no special needs, leave it empty.
 * @method void setControlParams(CommonMixControlParams $ControlParams) Set Special control parameter for stream mix. If there are no special needs, leave it empty.
 */
class CreateCommonMixStreamRequest extends AbstractModel
{
    /**
     * @var string ID of a stream mix session (from applying for the stream mix to cancelling it). This parameter can contain up to 80 bytes of letters, digits, and underscores.
     */
    public $MixStreamSessionId;

    /**
     * @var array Input stream list for stream mix.
     */
    public $InputStreamList;

    /**
     * @var CommonMixOutputParams Output stream parameter for stream mix.
     */
    public $OutputParams;

    /**
     * @var integer Input template ID. If this parameter is set, the output will be generated according to the default template layout, and there is no need to enter the custom position parameters.
If this parameter is left empty, 0 will be used by default.
For two input sources, 10, 20, 30, 40, and 50 are supported.
For three input sources, 310, 390, and 391 are supported.
For four input sources, 410 is supported.
For five input sources, 510 and 590 are supported.
For six input sources, 610 is supported.
     */
    public $MixStreamTemplateId;

    /**
     * @var CommonMixControlParams Special control parameter for stream mix. If there are no special needs, leave it empty.
     */
    public $ControlParams;

    /**
     * @param string $MixStreamSessionId ID of a stream mix session (from applying for the stream mix to cancelling it). This parameter can contain up to 80 bytes of letters, digits, and underscores.
     * @param array $InputStreamList Input stream list for stream mix.
     * @param CommonMixOutputParams $OutputParams Output stream parameter for stream mix.
     * @param integer $MixStreamTemplateId Input template ID. If this parameter is set, the output will be generated according to the default template layout, and there is no need to enter the custom position parameters.
If this parameter is left empty, 0 will be used by default.
For two input sources, 10, 20, 30, 40, and 50 are supported.
For three input sources, 310, 390, and 391 are supported.
For four input sources, 410 is supported.
For five input sources, 510 and 590 are supported.
For six input sources, 610 is supported.
     * @param CommonMixControlParams $ControlParams Special control parameter for stream mix. If there are no special needs, leave it empty.
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
        if (array_key_exists("MixStreamSessionId",$param) and $param["MixStreamSessionId"] !== null) {
            $this->MixStreamSessionId = $param["MixStreamSessionId"];
        }

        if (array_key_exists("InputStreamList",$param) and $param["InputStreamList"] !== null) {
            $this->InputStreamList = [];
            foreach ($param["InputStreamList"] as $key => $value){
                $obj = new CommonMixInputParam();
                $obj->deserialize($value);
                array_push($this->InputStreamList, $obj);
            }
        }

        if (array_key_exists("OutputParams",$param) and $param["OutputParams"] !== null) {
            $this->OutputParams = new CommonMixOutputParams();
            $this->OutputParams->deserialize($param["OutputParams"]);
        }

        if (array_key_exists("MixStreamTemplateId",$param) and $param["MixStreamTemplateId"] !== null) {
            $this->MixStreamTemplateId = $param["MixStreamTemplateId"];
        }

        if (array_key_exists("ControlParams",$param) and $param["ControlParams"] !== null) {
            $this->ControlParams = new CommonMixControlParams();
            $this->ControlParams->deserialize($param["ControlParams"]);
        }
    }
}
