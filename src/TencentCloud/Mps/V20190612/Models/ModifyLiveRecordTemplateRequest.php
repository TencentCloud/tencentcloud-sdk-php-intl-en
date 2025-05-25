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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveRecordTemplate request structure.
 *
 * @method integer getDefinition() Obtain Specifies the recording template unique identifier.
 * @method void setDefinition(integer $Definition) Set Specifies the recording template unique identifier.
 * @method HLSConfigureInfo getHLSConfigure() Obtain HLS configuration parameter. Either this parameter or MP4Configure should be specified.
 * @method void setHLSConfigure(HLSConfigureInfo $HLSConfigure) Set HLS configuration parameter. Either this parameter or MP4Configure should be specified.
 * @method MP4ConfigureInfo getMP4Configure() Obtain MP4 configuration parameter. Either this parameter or HLSConfigure should be specified.
 * @method void setMP4Configure(MP4ConfigureInfo $MP4Configure) Set MP4 configuration parameter. Either this parameter or HLSConfigure should be specified.
 * @method string getName() Obtain Recording template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Recording template name. Length limit: 64 characters.
 * @method string getComment() Obtain Template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Template description, with a length limit of 256 characters.
 */
class ModifyLiveRecordTemplateRequest extends AbstractModel
{
    /**
     * @var integer Specifies the recording template unique identifier.
     */
    public $Definition;

    /**
     * @var HLSConfigureInfo HLS configuration parameter. Either this parameter or MP4Configure should be specified.
     */
    public $HLSConfigure;

    /**
     * @var MP4ConfigureInfo MP4 configuration parameter. Either this parameter or HLSConfigure should be specified.
     */
    public $MP4Configure;

    /**
     * @var string Recording template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @param integer $Definition Specifies the recording template unique identifier.
     * @param HLSConfigureInfo $HLSConfigure HLS configuration parameter. Either this parameter or MP4Configure should be specified.
     * @param MP4ConfigureInfo $MP4Configure MP4 configuration parameter. Either this parameter or HLSConfigure should be specified.
     * @param string $Name Recording template name. Length limit: 64 characters.
     * @param string $Comment Template description, with a length limit of 256 characters.
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

        if (array_key_exists("HLSConfigure",$param) and $param["HLSConfigure"] !== null) {
            $this->HLSConfigure = new HLSConfigureInfo();
            $this->HLSConfigure->deserialize($param["HLSConfigure"]);
        }

        if (array_key_exists("MP4Configure",$param) and $param["MP4Configure"] !== null) {
            $this->MP4Configure = new MP4ConfigureInfo();
            $this->MP4Configure->deserialize($param["MP4Configure"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
