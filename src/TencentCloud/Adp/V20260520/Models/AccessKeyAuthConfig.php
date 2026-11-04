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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AccessKey authentication configuration
 *
 * @method array getParamList() Obtain <p>Access Key field configuration</p>
 * @method void setParamList(array $ParamList) Set <p>Access Key field configuration</p>
 * @method AccessKeyPassThroughConfig getPassThroughConfig() Obtain <p>Access Key passthrough configuration</p>
 * @method void setPassThroughConfig(AccessKeyPassThroughConfig $PassThroughConfig) Set <p>Access Key passthrough configuration</p>
 * @method integer getUsageMode() Obtain <p>Access Key usage mode</p><p>Enumeration values:</p><ul><li>1: Access Key pass-through</li></ul>
 * @method void setUsageMode(integer $UsageMode) Set <p>Access Key usage mode</p><p>Enumeration values:</p><ul><li>1: Access Key pass-through</li></ul>
 */
class AccessKeyAuthConfig extends AbstractModel
{
    /**
     * @var array <p>Access Key field configuration</p>
     */
    public $ParamList;

    /**
     * @var AccessKeyPassThroughConfig <p>Access Key passthrough configuration</p>
     */
    public $PassThroughConfig;

    /**
     * @var integer <p>Access Key usage mode</p><p>Enumeration values:</p><ul><li>1: Access Key pass-through</li></ul>
     */
    public $UsageMode;

    /**
     * @param array $ParamList <p>Access Key field configuration</p>
     * @param AccessKeyPassThroughConfig $PassThroughConfig <p>Access Key passthrough configuration</p>
     * @param integer $UsageMode <p>Access Key usage mode</p><p>Enumeration values:</p><ul><li>1: Access Key pass-through</li></ul>
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
        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new AccessKeyParamConfig();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("PassThroughConfig",$param) and $param["PassThroughConfig"] !== null) {
            $this->PassThroughConfig = new AccessKeyPassThroughConfig();
            $this->PassThroughConfig->deserialize($param["PassThroughConfig"]);
        }

        if (array_key_exists("UsageMode",$param) and $param["UsageMode"] !== null) {
            $this->UsageMode = $param["UsageMode"];
        }
    }
}
