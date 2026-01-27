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

namespace TencentCloud\Hunyuan\V20230901;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Hunyuan\V20230901\Models as Models;

/**
 * @method Models\ChatTranslationsResponse ChatTranslations(Models\ChatTranslationsRequest $req) Tencent Hunyuan is a large language model (LLM) developed by Tencent R&D. It possesses powerful Chinese creation capacity, logical reasoning in complex context, and reliable task execution power. This API supports streaming or non-streaming calls. When using streaming calls, it follows the SSE protocol.

1. This API does not currently support returning Image Content.
2. By default, this API has account restrictions with a number of concurrencies of 5. 
3. Please use the SDK to call this API. examples are provided in the Git repository examples/hunyuan/v20230901/ directory for each development language. The SDK link is provided in the "**Developer Resources - SDK**" part under the document.
4. We recommend you use API Explorer for quick online debugging interface and download example code in languages, [click to open](https://console.cloud.tencent.com/api/explorer?Product=hunyuan&Version=2023-09-01&Action=ChatCompletions).
 * @method Models\Convert3DFormatResponse Convert3DFormat(Models\Convert3DFormatRequest $req) After inputting a 3D model file, the 3D model file format can be switched.
 * @method Models\Describe3DSmartTopologyJobResponse Describe3DSmartTopologyJob(Models\Describe3DSmartTopologyJobRequest $req) The SmartTopoly API uses the Polygon 1.5 model. After manually inputting a 3D high-poly model, it can generate a neat 3D model with lower polygon count.
1 concurrent is provided by default, which means 1 submitted task can be processed simultaneously. The next task can be processed only after the previous task is completed.
 * @method Models\QueryHunyuan3DPartJobResponse QueryHunyuan3DPartJob(Models\QueryHunyuan3DPartJobRequest $req) This API is used to query the generation task of a component.
 * @method Models\QueryHunyuanTo3DProJobResponse QueryHunyuanTo3DProJob(Models\QueryHunyuanTo3DProJobRequest $req) This API is used to intelligently generate 3D content based on the HunYuan Large Model and input text descriptions/images.
This API is used to provide 3 concurrent tasks by default, which can process 3 submitted tasks simultaneously. The next task can be processed only after the previous task is completed.
 * @method Models\QueryHunyuanTo3DRapidJobResponse QueryHunyuanTo3DRapidJob(Models\QueryHunyuanTo3DRapidJobRequest $req) This API is used to intelligently generate 3D content based on the HunYuan Large Model with input text descriptions or images.
This API is used to provide 1 concurrent task by default, which means only 1 submitted task can be processed simultaneously. The next task can be processed only after the previous task is completed.
 * @method Models\Submit3DSmartTopologyJobResponse Submit3DSmartTopologyJob(Models\Submit3DSmartTopologyJobRequest $req) The SmartTopoly API uses the Polygen 1.5 model. After manually inputting a 3D high-poly model, it can generate a neat 3D model with lower polygon count.
1 concurrent is provided by default, which means 1 submitted task can be processed simultaneously. The next task can be processed only after the previous task is completed.
 * @method Models\SubmitHunyuan3DPartJobResponse SubmitHunyuan3DPartJob(Models\SubmitHunyuan3DPartJobRequest $req) This API is used to automatically perform component identification and generation based on the model structure after inputting a 3D model file.
 * @method Models\SubmitHunyuanTo3DProJobResponse SubmitHunyuanTo3DProJob(Models\SubmitHunyuanTo3DProJobRequest $req) This API is used to intelligently generate 3D content based on the HunYuan Large Model and input text descriptions/images.
This API is used to provide 3 concurrent tasks by default. Up to 3 submitted tasks can be processed simultaneously. A new task can be processed only after the previous one is completed.
 * @method Models\SubmitHunyuanTo3DRapidJobResponse SubmitHunyuanTo3DRapidJob(Models\SubmitHunyuanTo3DRapidJobRequest $req) This API is used to intelligently generate 3D content based on the HunYuan Large Model with input text descriptions or images.
This API is used to provide 1 concurrent task by default, which means only 1 submitted task can be processed simultaneously. The next task can be processed only after the previous task is completed.
 */

class HunyuanClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "hunyuan.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "hunyuan";

    /**
     * @var string
     */
    protected $version = "2023-09-01";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("hunyuan")."\\"."V20230901\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
