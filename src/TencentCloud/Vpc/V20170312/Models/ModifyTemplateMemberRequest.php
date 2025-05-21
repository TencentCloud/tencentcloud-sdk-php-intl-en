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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTemplateMember request structure.
 *
 * @method string getTemplateId() Obtain Parameter template instance ID, which can be the instance ID of a parameter template of the following four types: IP address, protocol port, IP address group, and protocol port group.
 * @method void setTemplateId(string $TemplateId) Set Parameter template instance ID, which can be the instance ID of a parameter template of the following four types: IP address, protocol port, IP address group, and protocol port group.
 * @method array getOriginalTemplateMember() Obtain Information on the parameter template to be modified. The template can be of the following four types: IP address, protocol port, IP address group, and protocol port group. The type should be consistent with that of the template specified by the TemplateId parameter. The parameter sequence should be the same as that of TemplateMember, and the input parameter length should be consistent with that of TemplateMember.
 * @method void setOriginalTemplateMember(array $OriginalTemplateMember) Set Information on the parameter template to be modified. The template can be of the following four types: IP address, protocol port, IP address group, and protocol port group. The type should be consistent with that of the template specified by the TemplateId parameter. The parameter sequence should be the same as that of TemplateMember, and the input parameter length should be consistent with that of TemplateMember.
 * @method array getTemplateMember() Obtain New parameter template information. The template can be of the following four types: IP address, protocol port, IP address group, and protocol port group. The type should be consistent with that of the template specified by the TemplateId parameter. The parameter sequence should be the same as that of OriginalTemplateMember, and the input parameter length should be consistent with that of OriginalTemplateMember.
 * @method void setTemplateMember(array $TemplateMember) Set New parameter template information. The template can be of the following four types: IP address, protocol port, IP address group, and protocol port group. The type should be consistent with that of the template specified by the TemplateId parameter. The parameter sequence should be the same as that of OriginalTemplateMember, and the input parameter length should be consistent with that of OriginalTemplateMember.
 */
class ModifyTemplateMemberRequest extends AbstractModel
{
    /**
     * @var string Parameter template instance ID, which can be the instance ID of a parameter template of the following four types: IP address, protocol port, IP address group, and protocol port group.
     */
    public $TemplateId;

    /**
     * @var array Information on the parameter template to be modified. The template can be of the following four types: IP address, protocol port, IP address group, and protocol port group. The type should be consistent with that of the template specified by the TemplateId parameter. The parameter sequence should be the same as that of TemplateMember, and the input parameter length should be consistent with that of TemplateMember.
     */
    public $OriginalTemplateMember;

    /**
     * @var array New parameter template information. The template can be of the following four types: IP address, protocol port, IP address group, and protocol port group. The type should be consistent with that of the template specified by the TemplateId parameter. The parameter sequence should be the same as that of OriginalTemplateMember, and the input parameter length should be consistent with that of OriginalTemplateMember.
     */
    public $TemplateMember;

    /**
     * @param string $TemplateId Parameter template instance ID, which can be the instance ID of a parameter template of the following four types: IP address, protocol port, IP address group, and protocol port group.
     * @param array $OriginalTemplateMember Information on the parameter template to be modified. The template can be of the following four types: IP address, protocol port, IP address group, and protocol port group. The type should be consistent with that of the template specified by the TemplateId parameter. The parameter sequence should be the same as that of TemplateMember, and the input parameter length should be consistent with that of TemplateMember.
     * @param array $TemplateMember New parameter template information. The template can be of the following four types: IP address, protocol port, IP address group, and protocol port group. The type should be consistent with that of the template specified by the TemplateId parameter. The parameter sequence should be the same as that of OriginalTemplateMember, and the input parameter length should be consistent with that of OriginalTemplateMember.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("OriginalTemplateMember",$param) and $param["OriginalTemplateMember"] !== null) {
            $this->OriginalTemplateMember = [];
            foreach ($param["OriginalTemplateMember"] as $key => $value){
                $obj = new MemberInfo();
                $obj->deserialize($value);
                array_push($this->OriginalTemplateMember, $obj);
            }
        }

        if (array_key_exists("TemplateMember",$param) and $param["TemplateMember"] !== null) {
            $this->TemplateMember = [];
            foreach ($param["TemplateMember"] as $key => $value){
                $obj = new MemberInfo();
                $obj->deserialize($value);
                array_push($this->TemplateMember, $obj);
            }
        }
    }
}
